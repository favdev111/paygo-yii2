<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\widgets\Alert;
$this->title = 'Request password reset';
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
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark"><a href="#"><img class="block-center rounded" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="Image"></a></div>
            <div class="card-body">
               <p class="text-center py-2">PASSWORD RESET</p>
               <?= Alert::widget() ?>
				<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
					<p class="text-center">Fill with your mail to receive instructions on how to reset your password.</p>

					<?= $form->field($model, 'email')->label('Email address')->textInput(['class' => 'form-control border-right','placeholder' => 'Enter email']) ?>

					<?= Html::submitButton('Reset', ['class' => 'btn btn-danger btn-block','type' => 'submit']) ?>

					<div class="float-right">
							<?= Html::a('<span class="text-muted"><em class="fa fa-reply"></em> Back to Login</span> ',['site/login'], ['title' => 'Back to Login']) ?>
						</div>
					</div>

				<?php ActiveForm::end(); ?>
         
	 </div>
         <div class="p-3 text-center"><span class="mr-2">&copy;</span><span>2019 - PayGo</span><br><span>PayGo Technologies Pvt. Ltd.</span></div>
      </div>
    </div><!-- =============== VENDOR SCRIPTS ===============-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
