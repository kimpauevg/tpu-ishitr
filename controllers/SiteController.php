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



    //Информатики и вычислительная техника

    public function actionBivt()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-ivt';

        return $this->render('b-ivt');
    }

    //Автоматизация технологических процессов и производств

    public function actionBatp()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-atp';

        return $this->render('b-atp');
    }

    //Дизайн

    public function actionBdes()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-des';

        return $this->render('b-des');
    }

    //Мехатроника и робототехника

    public function actionBmir()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-mir';

        return $this->render('b-mir');
    }

    //Программная инженерия

    public function actionBpri()
    {
        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-pri';

        return $this->render('b-pri');
    }


    //Дальше идут программы магистров

    //Разработка интернет-приложений
    public function actionRip(){

        Yii::$app->view->params['action_name'] = 'rip';
        return $this->render('rip');
    }
    //Искусственный интеллект и машинное обучение
    public function actionIim(){
        return $this->render('iim');
    }

    // Мобильные приложения и виртуальная реальность
    public function actionMvr(){
        Yii::$app->view->params['action_name'] = 'mvr';
        return $this->render('mvr');
    }
    // Медицинские информационные системы и телемедицина
    public function actionMst(){
        Yii::$app->view->params['action_name'] = 'mst';
        return $this->render('mst');
    }
    // Big Data Solutions* (Технологии больших данных) англ. язык
    public function actionBds(){
        Yii::$app->view->params['action_name'] = 'bds';
        return $this->render('bds');
    }

    // Интернет вещей и цифровое производство
    public function actionIvp(){
        Yii::$app->view->params['action_name'] = 'ivp';
        return $this->render('ivp');
    }
    // IoT & Digital Production - англ. язык
    public function actionIot(){
        Yii::$app->view->params['action_name'] = 'iot';
        return $this->render('iot');
    }
    // Управление робототехническими комплексами и мехатронными системами
    public function actionUrs(){
        Yii::$app->view->params['action_name'] = 'urs';
        return $this->render('urs');
    }
    // Инженерия реабилитационных и вспомогательных технологий
    public function actionIrt(){
        Yii::$app->view->params['action_name'] = 'irt';
        return $this->render('irt');
    }
    // Автоматизация измерений и контроля
    public function actionAik(){
        Yii::$app->view->params['action_name'] = 'aik';
        return $this->render('aik');
    }
    // Промышленный дизайн
    public function actionPd(){
        Yii::$app->view->params['action_name'] = 'pd';
        return $this->render('pd');
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
