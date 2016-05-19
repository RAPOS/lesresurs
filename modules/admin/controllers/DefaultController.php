<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\LAdmins;
use app\models\LImages;
use app\models\LMainpage;

class DefaultController extends Controller
{
	
    public function actionIndex()
    {
		if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);
		
        return $this->render('index');
    }
	
	public function actionLogin()
	{
		$error = null;
		$model = new LAdmins();
		if (Yii::$app->request->post()) {
			$model->attributes = Yii::$app->request->post('LAdmins');
			if ($model->validate()) {
				$LAdmins = LAdmins::find()->where(["name" => $model->name])->one();
				if ($LAdmins) {
					if($LAdmins->password === md5(md5($model->password))){
						if($LAdmins->login()) $this->redirect(Yii::$app->user->returnUrl);
					} else {
						$error = "Не верный пароль.";
					}
				} else {
					$error = "Не верный логин.";
				}
			} else {
				$error = "Не прошло валидацию.";
			}
		}

		return $this->render('login', [
			'model' => $model,
			'error' => $error,
		]);
	}
	
    public function actionLogout()
    {
        Yii::$app->user->logout();
		return $this->goHome();
    }
	
	public function actionMainpage(){
		if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);

		$model = LMainpage::find()->where(['site' => 1])->one();
		if(!$model){
			$model = new LMainpage;
			$model->site = 1;
		}
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			if($_POST[id_img]){
				$array_id_img = json_decode($model->images);
				if(is_array($array_id_img)){
					$new_pre_images = array_merge($array_id_img, $_POST[id_img]);
					$model->images = json_encode(array_unique($new_pre_images));
					$model->save();
				} else {
					$model->images = json_encode($_POST[id_img]);
					$model->save();
				}
			}
			$model->save();
			
			return $this->render('mainpage', ['model' => $model, 'success' => true]);
		}

		return $this->render('mainpage', [
			'model' => $model,
		]);
	}
	
	public function actionFeedback(){
		$this->redirect('/admin/feedback/');
	}
	
	public function actionUserchange(){
		if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);
		
		$model = LAdmins::findOne(Yii::$app->user->id);
		if (!$model) {
			$model = new LAdmins;
		}
		if ($model->load(Yii::$app->request->post())) {
			if ($model->validate()) {
				$model->password = md5(md5($model->password));
				$model->save();
				
				return $this->render('userchange', ['model' => $model, 'success' => true]);
			}
		}

		return $this->render('userchange', ['model' => $model]);
	}
	
	public function actionUpload(){
		if ($_FILES)  {
			for ($i=0;$i<count($_FILES);$i++) {
				if(!in_array(exif_imagetype($_FILES['image']['tmp_name'][$i]), array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG))){
					return false;
				}
				$path_info = pathinfo($_FILES['image']['name'][$i]);
				$name = md5($path_info['filename'].md5(rand(1,1000000)));
				$dir = 'files/images';

				$LImages = new LImages;
				$LImages->name = $name;
				$LImages->extension = $path_info['extension'];
				if($LImages->save()){
					$LImages->path = $dir.'/'.$LImages->id_img.'/'.$name.'.'.$path_info['extension'];
					$LImages->save();
					
					$path = $dir.'/'.$LImages->id_img;
					mkdir($_SERVER['DOCUMENT_ROOT'].'/'.$path, 0777, true);
					if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/files/uploads/')){
						mkdir($_SERVER['DOCUMENT_ROOT'].'/files/uploads/');
					}
					if(move_uploaded_file($_FILES['image']['tmp_name'][$i], $_SERVER['DOCUMENT_ROOT'].'/files/uploads/'.$name.'.'.$path_info['extension'])){
						$image = Yii::$app->image->load(Yii::getAlias('@webroot/files/uploads/'.$name.'.'.$path_info['extension']));
						$image->resize(800, NULL, \yii\image\drivers\Image::AUTO);
						$mark = Yii::$app->image->load(Yii::getAlias('@webroot/images/label.png'));
						$image->watermark($mark, TRUE, TRUE);
						$image->save(Yii::getAlias('@webroot/'.$LImages->path));
						
						unlink($_SERVER['DOCUMENT_ROOT'].'/files/uploads/'.$name.'.'.$path_info['extension']);
						print json_encode(array('id_img' => $LImages->id_img));
					}
				}
			}
		}
	}
	
	public function actionDeleteimages() {
		if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);

		if ($_POST) {
			$new_array_images = array();
			for ($i=0;$i<count($_POST['id_images']);$i++) {
				if ($_POST['delete_id_img'] != $_POST['id_images'][$i]) {
					$new_array_images[] = $_POST['id_images'][$i];
				}
			}

			$model = LMainpage::find()->where(['site' => 1])->one();

			$model->images = json_encode($new_array_images);
			if ($model->save()) {
				$LImages = LImages::findOne($_POST['delete_id_img']);
				if ($LImages->delete()) {
					if (!unlink(Yii::getAlias('@webroot/'.$_POST['delete_path']))) {
						return 'Не удалось удалить изображение локально';
					} else {
						return true;
					}
				} else {
					return 'Не удалось удалить изображение из базы';
				}
			} else {
				return 'Не удалось перезаписать изображения';
			}
		} else {
			return 'Не пришли данные для удаления';
		}
	}
}
