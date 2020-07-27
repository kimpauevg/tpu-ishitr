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
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&amp;subset=cyrillic" />
    <link rel="stylesheet" type="text/css" href="/combined/styles.css" />
    <link rel="stylesheet" type="text/css" href="/combined/common.css" />
    <link rel="stylesheet" type="text/css" href="/combined/<?=$action_name . '/' . $action_name?>.css" />
<!--Вставлено-->

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<header>
    <div class="container-wide">
        <div class="header-row">
            <a class="header-container" href="/">
                <div class="d-flex flex-row align-items-center">
                    <div class="logo-icon"></div>
                    <div class="logo-text">томский<br>политехнический<br>университет</div>
                </div>
            </a>
            <div class="header-container">
                <div class="contact-row">
                    <div class="contact-bold contact">
                        +7 952 800 26-01
                    </div>
                </div>

                <div class="social-row">
                    <div class="social-icon">
                        <img src="/combined/new_landing/icons8-vk-round-100.png" class="vk">
                    </div>
                    <div class="social-icon instagram">
                        <img src="/combined/new_landing/instagram.png" class="instagram">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php $this->beginBody() ?>

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
    Успех
</div>

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
                        +7 952 800 26-01
                    </div>
                </div>

            </div>
            <div class="footer-container">
                <div class="social-row">
                    <div class="social-icon">
                        <img src="/combined/new_landing/icons8-vk-round-100.png" class="vk">
                    </div>
                    <div class="social-icon instagram">
                        <img src="/combined/new_landing/instagram.png" class="instagram">
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="copyright">
        © 2020 - Национальный исследовательский Томский политехнический университет
    </div>
</footer>
<script type="text/javascript" src="/combined/scripts.js"></script>
</body>
</html>
<?php $this->endPage() ?>
