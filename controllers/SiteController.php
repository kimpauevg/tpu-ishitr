<?php

namespace app\controllers;

use app\models\EmailForm;
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
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'notify' => ['POST'],
                ],
            ],
        ];
    }

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
    public function beforeAction($action)
    {
        Yii::$app->view->title = 'Инженерная школа информационных технологий и робототехники | ТПУ';
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
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
        Yii::$app->view->title = 'Информатика и вычислительная техника | ТПУ';

        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-ivt';

        return $this->render('b-ivt');
    }

    //Автоматизация технологических процессов и производств

    public function actionBatp()
    {
        Yii::$app->view->title = 'Автоматизация технологических процессов и производств | ТПУ';

        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-atp';

        return $this->render('b-atp');
    }

    //Дизайн

    public function actionBdes()
    {
        Yii::$app->view->title = 'Дизайн | ТПУ';

        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-des';

        return $this->render('b-des');
    }

    //Мехатроника и робототехника

    public function actionBmir()
    {
        Yii::$app->view->title = 'Мехатроника и робототехника | ТПУ';

        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-mir';

        return $this->render('b-mir');
    }

    //Программная инженерия

    public function actionBpri()
    {
        Yii::$app->view->title = 'Программная инженерия | ТПУ';

        Yii::$app->view->params['bakalavriat'] = true;
        Yii::$app->view->params['action_name'] = 'b-pri';

        return $this->render('b-pri');
    }


    //Дальше идут программы магистров

    //Разработка интернет-приложений
    public function actionRip()
    {
        Yii::$app->view->title = 'Разработка интернет-приложений | ТПУ';

        Yii::$app->view->params['action_name'] = 'rip';
        return $this->render('rip');
    }
    //Искусственный интеллект и машинное обучение
    public function actionIim()
    {
        Yii::$app->view->title = 'Искусственный интеллект и машинное обучение | ТПУ';

        Yii::$app->view->params['action_name'] = 'iim';
        return $this->render('iim');
    }

    // Мобильные приложения и виртуальная реальность
    public function actionMvr()
    {
        Yii::$app->view->title = 'Мобильные приложения и виртуальная реальность | ТПУ';

        Yii::$app->view->params['action_name'] = 'mvr';
        return $this->render('mvr');
    }
    // Медицинские информационные системы и телемедицина
    public function actionMst()
    {
        Yii::$app->view->title = 'Медицинские информационные системы и телемедицина | ТПУ';

        Yii::$app->view->params['action_name'] = 'mst';
        return $this->render('mst');
    }
    // Big Data Solutions* (Технологии больших данных) англ. язык
    public function actionBds()
    {
        Yii::$app->view->title = 'Big Data Solutions | TPU';

        Yii::$app->view->params['action_name'] = 'bds';
        return $this->render('bds');
    }

    // Интернет вещей и цифровое производство
    public function actionIvp()
    {
        Yii::$app->view->title = 'Интернет вещей и цифровое производство | ТПУ';

        Yii::$app->view->params['action_name'] = 'ivp';
        return $this->render('ivp');
    }
    // IoT & Digital Production - англ. язык
    public function actionIot()
    {
        Yii::$app->view->title = 'IoT & Digital Production | TPU';

        Yii::$app->view->params['action_name'] = 'iot';
        return $this->render('iot');
    }
    // Управление робототехническими комплексами и мехатронными системами
    public function actionUrs()
    {
        Yii::$app->view->title = 'Управление робототехническими комплексами и мехатронными системами | ТПУ';

        Yii::$app->view->params['action_name'] = 'urs';
        return $this->render('urs');
    }
    // Инженерия реабилитационных и вспомогательных технологий
    public function actionIrt()
    {
        Yii::$app->view->title = 'Инженерия реабилитационных и вспомогательных технологий | ТПУ';

        Yii::$app->view->params['action_name'] = 'irt';
        return $this->render('irt');
    }
    // Автоматизация измерений и контроля
    public function actionAik()
    {
        Yii::$app->view->title = 'Автоматизация измерений и контроля | ТПУ';

        Yii::$app->view->params['action_name'] = 'aik';
        return $this->render('aik');
    }
    // Промышленный дизайн
    public function actionPd()
    {
        Yii::$app->view->title = 'Промышленный дизайн | ТПУ';

        Yii::$app->view->params['action_name'] = 'pd';
        return $this->render('pd');
    }

    public function actionNotify() {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $form = new EmailForm();
        $form->setAttributes(Yii::$app->request->post(), true);
        if (!$form->validate()) {
            return [
                'success' => false,
                'info' => $form->getErrors()
            ];

        }
        $form->send();
        return [
            'success' => true,
            'info' => []
        ];
    }

}
