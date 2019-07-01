<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?= Html::csrfMetaTags() ?>
   <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title><?= Html::encode($this->title) ?></title>
    <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/brands.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/regular.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/solid.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/fontawesome.css"><!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/simple-line-icons/css/simple-line-icons.css"><!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/animate.css/animate.css"><!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/whirl/dist/whirl.css"><!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/weather-icons/css/weather-icons.css"><!-- =============== BOOTSTRAP STYLES ===============-->

   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/bootstrap.css" id="bscss"><!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/app.css" id="maincss">
   <!-- on your view layout file HEAD section -->

</head>
<body class="login">
<?php $this->beginBody() ?>
    <div class="wrapper">
        <?= $content ?>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
