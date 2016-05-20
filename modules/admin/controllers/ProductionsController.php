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

        return $this->render('index', [
            'dataProvider' => $dataProvider,
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
        //dd(Yii::$app->request->post());
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $LImages = LImages::findOne(['id_image' => $model->id_image]);
            $LImages->status = 1;
            $LImages->save();
            
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

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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

        if(!$model){
            $model = new LProductionspage();
            $model->site = 1;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
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
