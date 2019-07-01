<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\widgets\Alert;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
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
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/simple-line-icons/css/simple-line-icons.css"><!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/animate.css/animate.css"><!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/whirl/dist/whirl.css"><!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/weather-icons/css/weather-icons.css"><!-- =============== BOOTSTRAP STYLES ===============-->

   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/bootstrap.css" id="bscss"><!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/app.css" id="maincss">
   <!-- on your view layout file HEAD section -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<?php $this->beginBody() ?>
<div class="wrapper">
<div class="block-center mt-xl wd-xl resetpass">
         <!-- START panel-->
         <div class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
               <a href="#">
                  <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="Image" class="block-center img-rounded"> 
               </a>
            </div>
            <div class="panel-body">
                 <p class="text-center pv">Please choose your new password</p>
               
                   <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                    <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
                
            </div>
         </div>
         <!-- END panel-->
    </div> 