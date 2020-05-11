<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout'],
//                'rules' => [
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }
//
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->view->params['action_name'] = 'landing';
        return $this->render('index');
    }
    public function actionBuh()
    {
        Yii::$app->view->params['action_name'] = 'buh';
        return $this->render('buh');
    }

    public function actionUp()
    {
        Yii::$app->view->params['action_name'] = 'up';
        return $this->render('up');
    }

    //Информатики и вычислительная техника

    public function actionIvt()
    {
        Yii::$app->view->params['action_name'] = 'ivt';

        return $this->render('ivt');
    }
    public function actionBivt()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'bivt';

        return $this->render('b-ivt');
    }

    //Автоматизация технологических процессов и производств

    public function actionAtp()
    {
        Yii::$app->view->params['action_name'] = 'atp';

        return $this->render('atp');
    }
    public function actionBatp()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'batp';

        return $this->render('b-atp');
    }

    //Дизайн

    public function actionDes()
    {
        Yii::$app->view->params['action_name'] = 'des';

        return $this->render('des');
    }
    public function actionBdes()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'bdes';

        return $this->render('b-des');
    }

    //Мехатроника и робототехника

    public function actionMir()
    {
        Yii::$app->view->params['action_name'] = 'mir';

        return $this->render('mir');
    }
    public function actionBmir()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'bmir';

        return $this->render('b-mir');
    }

    //Программная инженерия

    public function actionPri()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'pri';

        return $this->render('pri');
    }
    public function actionBpri()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'pri';

        return $this->render('b-pri');
    }

    //Информационные системы и технологии

    public function actionIst()
    {
        Yii::$app->view->params['action_name'] = 'ist';

        return $this->render('ist');
    }

    //Стандартизация и метрология

    public function actionSim()
    {
        Yii::$app->view->params['action_name'] = 'sim';

        return $this->render('sim');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
