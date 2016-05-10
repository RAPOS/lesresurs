<?php

namespace app\controllers;

use Yii;
use yii\captcha\CaptchaValidator;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\LArticles;
use app\models\LContacts;
use app\models\LFeedback;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLumbering()
    {
        return $this->render('lumbering');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionSpecials()
    {
        return $this->render('specials');
    }

    public function actionGallery()
    {
        return $this->render('gallery');
    }

    public function actionArticles($id = null)
    {
        if ($id) {
            $LArticles = LArticles::find()->where(['id' => $id])->one();
            return $this->render('articles_item', ['articles' => $LArticles]);
        }

        $LArticles = LArticles::find()->orderBy('id DESC')->all();
        return $this->render('articles', ['articles' => $LArticles]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContacts()
    {
        $LContacts = LContacts::find()->where(['site' => 1])->one();
        $LFeedback = new LFeedback();
        if (Yii::$app->request->post()) {
            $validator = new CaptchaValidator();
            if (!$validator->validate($_POST['LFeedback']['verifyCode'])) {
                Yii::$app->getSession()->setFlash('captcha', 'false');

                return $this->redirect(['contacts']);
            }

            if ($LFeedback->load(Yii::$app->request->post()) && $LFeedback->validate()){
                $LFeedback->date = time();
                $LFeedback->ip = $_SERVER['REMOTE_ADDR'];
                if ($LFeedback->save()) {
                    Yii::$app->getSession()->setFlash('save', 'true');

                    return $this->redirect(['contacts']);
                }
            }
        }

        if (Yii::$app->getSession()->getFlash('captcha')) {
            $captcha = false;
        } else {
            $captcha = true;
        }

        if (Yii::$app->getSession()->getFlash('save')) {
            $save = true;
        } else {
            $save = false;
        }

        return $this->render('contacts', [
            'contacts' => $LContacts,
            'feedback' => $LFeedback,
            'captcha' => $captcha,
            'save' => $save,
        ]);
    }
}
