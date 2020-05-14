<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$bakalavriat = $this->params['bakalavriat'] ?? false;
$action_name = $this->params['action_name'] ?? 'landing';

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Вставлено-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="language" content="ru" />
    <meta name="robot" content="index,follow" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="http://bis.tpu.ru/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&amp;subset=cyrillic" />
    <link rel="stylesheet" type="text/css" href="/assets/combined/styles.css" />
    <link rel="stylesheet" type="text/css" href="/assets/combined/common.css" />
    <link rel="stylesheet" type="text/css" href="/assets/combined/<?=$action_name . '/' . $action_name?>.css" />
<!--Вставлено-->

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<header>
    <div class="container-wide">
        <div class="header-row">
            <div class="header-container">
                <div class="d-flex flex-row align-items-center">
                    <div class="logo-icon"></div>
                    <div class="logo-text">томский<br>политехнический<br>университет</div>
                </div>
            </div>
            <div class="header-container">
                <div class="contact-row">
                    <div class="contact-bold contact">
                        +7 (3822) 22-12-36
                    </div>
                </div>

                <div class="social-row">
                    <div class="social-icon">
                        <img src="assets/combined/new_landing/icons8-vk-round-100.png" class="vk">
                    </div>
                    <div class="social-icon">
                        <img src="assets/combined/new_landing/icons8-whatsapp-90.png" class="vk">
                    </div>
                    <div class="social-icon instagram">
                        <img src="assets/combined/new_landing/instagram.png" class="vk">
                    </div>

                </div>

            </div>

        </div>
    </div>
</header>

<?php $this->beginBody() ?>

<div class="wrapper <?= $bakalavriat? 'bakalavriat': ''?>">
        <?= Alert::widget() ?>
        <?= $content ?>
</div>

<footer>
    <div class="container-wide">
        <div class="footer-row">
            <div class="footer-container">

                <div class="d-flex flex-row align-items-center">
                    <div class="logo-icon"></div>
                    <div>
                        <div class="logo-text">Инженерная школа<br>информационных технологий<br>и робототехники</div>
                        <div class="logo-subtext">томский политехнический университет</div>

                    </div>
                </div>

            </div>
            <div class="footer-container">
                <div class="contact-row">
                    <div class="contact-fade contact">
                        Для связи с нами
                    </div>
                    <div class="contact-bold contact">
                        +7 (3822) 22-12-36
                    </div>
                </div>

            </div>
            <div class="footer-container">
                <div class="social-row">
                    <div class="social-icon">
                        <img src="assets/combined/new_landing/icons8-vk-round-100.png" class="vk">
                    </div>
                    <div class="social-icon">
                        <img src="assets/combined/new_landing/icons8-whatsapp-90.png" class="vk">
                    </div>
                    <div class="social-icon instagram">
                        <img src="assets/combined/new_landing/instagram.png" class="vk">
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="copyright">
        © 2019 - Национальный исследовательский Томский политехнический университет
    </div>
</footer>
<script type="text/javascript" src="/assets/combined/scripts.js"></script>
<!--<script type="text/javascript" src="/assets/combined/--><?//=$this->params['action_name'] ?? 'landing'?><!--.js"></script>-->

<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function($) {
        jQuery('#subscribe-form').yiiactiveform({'errorCssClass':'has\x2Derror','successCssClass':'has\x2Dsuccess','inputContainer':'.field\x2Drow','validateOnSubmit':true,'validateOnChange':false,'afterValidate':function(form, data, hasError) {
                if(!hasError) {
                    var btn = $('#subscribe-submit-btn');
                    btn.html('<span class="spinner-border" role="status"></span>');
                }
                return true;
            },'attributes':[{'id':'SubscribeForm_name','inputID':'subscribe\x2Dname','errorID':'subscribe\x2Dname_em_','model':'SubscribeForm','name':'name','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {
                    if(jQuery.trim(value)=='') {
                        messages.push("\u041d\u0435\u043e\u0431\u0445\u043e\u0434\u0438\u043c\u043e \u0437\u0430\u043f\u043e\u043b\u043d\u0438\u0442\u044c \u043f\u043e\u043b\u0435 \u00ab\u0418\u043c\u044f\u00bb.");
                    }
                    if(jQuery.trim(value)!='') {

                        if(value.length>256) {
                            messages.push("\u0418\u043c\u044f \u0441\u043b\u0438\u0448\u043a\u043e\u043c \u0434\u043b\u0438\u043d\u043d\u044b\u0439 (\u041c\u0430\u043a\u0441\u0438\u043c\u0443\u043c: 256 \u0441\u0438\u043c\u0432.).");
                        }
                    }
                }},{'id':'SubscribeForm_email','inputID':'subscribe\x2Demail','errorID':'subscribe\x2Demail_em_','model':'SubscribeForm','name':'email','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {
                    if(jQuery.trim(value)=='') {
                        messages.push("\u041d\u0435\u043e\u0431\u0445\u043e\u0434\u0438\u043c\u043e \u0437\u0430\u043f\u043e\u043b\u043d\u0438\u0442\u044c \u043f\u043e\u043b\u0435 \u00abEmail\u00bb.");
                    }
                    if(jQuery.trim(value)!='' && !value.match(/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/)) {
                        messages.push("Email \u043d\u0435 \u044f\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u043c E-Mail \u0430\u0434\u0440\u0435\u0441\u043e\u043c.");
                    }
                }},{'id':'SubscribeForm_personal_data','inputID':'subscribe\x2Dpersonal\x2Ddata','errorID':'subscribe\x2Dpersonal\x2Ddata_em_','model':'SubscribeForm','name':'personal_data','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {
                    if(jQuery.trim(value)=='') {
                        messages.push("\u041d\u0435\u043e\u0431\u0445\u043e\u0434\u0438\u043c\u043e \u0437\u0430\u043f\u043e\u043b\u043d\u0438\u0442\u044c \u043f\u043e\u043b\u0435 \u00ab\u0441\u043e\u0433\u043b\u0430\u0441\u0438\u0435 \u043d\u0430 \u043e\u0431\u0440\u0430\u0431\u043e\u0442\u043a\u0443 \u043f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0445 \u0434\u0430\u043d\u043d\u044b\u0445\u00bb.");
                    }
                    if(jQuery.trim(value)!='' && value!="1" && value!="0") {
                        messages.push("\u0441\u043e\u0433\u043b\u0430\u0441\u0438\u0435 \u043d\u0430 \u043e\u0431\u0440\u0430\u0431\u043e\u0442\u043a\u0443 \u043f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0445 \u0434\u0430\u043d\u043d\u044b\u0445 \u0434\u043e\u043b\u0436\u043d\u043e \u0431\u044b\u0442\u044c 1 \u0438\u043b\u0438 0.");
                    }
                }}],'errorCss':'error'});
    });
    /*]]>*/
</script>

<?php //$this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
