<?php
namespace app\modules\admin\controllers;

use Yii;
use app\models\LImages;
use app\models\LProductions;
use app\models\LProductionspage;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ActionsController implements the CRUD articles for LProductions model.
 */
class ProductionsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all LProductions models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);

        $dataProvider = new ActiveDataProvider([
            'query' => LProductions::find(),
            'sort' => [
                'defaultOrder' => ['id' => SORT_DESC],
            ],
        ]);

        $create = null;
        if (Yii::$app->getSession()->has('delete')) {
            if(Yii::$app->getSession()->getFlash('delete')){
                $create = true;
            }
        }
        
        $save = null;
        if (Yii::$app->getSession()->has('delete')) {
            if(Yii::$app->getSession()->getFlash('delete')){
                $save = true;
            }
        }
        
        $delete = null;
        if (Yii::$app->getSession()->has('delete')) {
            if(Yii::$app->getSession()->getFlash('delete')){
                $delete = true;
            }
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'create' => $create,
            'save' => $save,
            'delete' => $delete,
        ]);
    }

    /**
     * Creates a new LProductions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);

        $model = new LProductions();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $LImages = LImages::findOne(['id_image' => $model->id_image]);
            $LImages->status = 1;
            $LImages->save();
            
            Yii::$app->getSession()->setFlash('create', 'true');
            return $this->redirect(['/admin/productions/']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LProductions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $LImages = LImages::findOne(['id_image' => $model->id_image]);
            $LImages->status = 1;
            $LImages->save();

            Yii::$app->getSession()->setFlash('save', 'true');
            return $this->redirect(['/admin/productions/']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LProductions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);

        if( $this->findModel($id)->delete()){
            Yii::$app->getSession()->setFlash('delete', 'true');
        }

        return $this->redirect('/admin/productions/');
    }

    /**
     * Finds the LProductions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LProductions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LProductions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionDescription(){
        if (Yii::$app->user->isGuest)  $this->redirect(Yii::$app->user->loginUrl);

        $model = LProductionspage::find()->where(['site' => 1])->one();

        if (!$model) {
            $model = new LProductionspage();
            $model->site = 1;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($_POST['id_images']){
                $array_id_img = json_decode($model->images);
                if(is_array($array_id_img)){
                    $new_pre_images = array_merge($array_id_img, $_POST['id_images']);
                    $model->images = json_encode(array_unique($new_pre_images));
                    $model->save();
                } else {
                    $model->images = json_encode($_POST['id_images']);
                    $model->save();
                }
            }
            $model->save();

            Yii::$app->getSession()->setFlash('save', 'true');
            return $this->redirect(['description']);
        }

        $save = null;
        if (Yii::$app->getSession()->has('save')) {
            if(Yii::$app->getSession()->getFlash('save')) {
                $save = true;
            }
        }

        return $this->render('description', [
            'model' => $model,
            'save' => $save
        ]);
    }
}
