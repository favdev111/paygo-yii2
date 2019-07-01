
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\widgets\Alert;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
 <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/brands.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/regular.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/solid.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/fontawesome.css"><!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/simple-line-icons/css/simple-line-icons.css"><!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/animate.css/animate.css"><!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/whirl/dist/whirl.css"><!-- =============== PAGE VENDOR STYLES ===============-->

   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/bootstrap.css" id="bscss"><!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/app.css" id="maincss">
   <!-- on your view layout file HEAD section -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<div class="wrapper">

<div class="block-center mt-5 col-6">
         <!-- START panel-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(true); ?>">
                  <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="Image" class="block-center rounded">
               </a>
            </div>
            <div role="tabpanel">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " href="<?php echo Yii::$app->urlManager->createUrl('user/signup'); ?>" aria-controls="personal-account-settings" role="tab" data-toggle="tab">
                            <em class="icon-equalizer fa-sm"> Personal Account</em>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#" aria-controls="app-chat" role="tab" data-toggle="tab">
                            <em class="icon-user fa-sm"> Business Account</em>
                        </a>
                    </li>
                </ul><!-- Tab panes-->
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="bussiness-account-settings" role="tabpanel">
                    <div class="card-body">
                            <?= Alert::widget() ?>
                            <?php $form = ActiveForm::begin(
                                [
                                'id' => 'form-signup',
                                'options' => ['class' => 'form-horizontal'],
                                'fieldConfig' => [
                                        'template' => "{label}\n{input}\n{error}",
                                        'labelOptions' => ['class' => 'control-label'],
                                    ],
                                ]);
                            ?>
                            <fieldset class="row">
                                <legend>Personal Details</legend>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>

                                    </div>
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'lastname');?>
                                    </div>
                                </div>
                               <div class="form-row">
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'email') ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'mobile');?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'password')->passwordInput() ?>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="row">
                                <legend>Business Details</legend>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'businessname') ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'businessemail');?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'businessmobile');?>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-lg-6">
                                    <br />
                                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary mt-lg', 'name' => 'signup-button']) ?>

                                    <a class="btn btn-success mt-lg" href="<?php echo Yii::$app->urlManager->createUrl('site/login'); ?>">Login</a>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>

         </div>
         <!-- END panel-->

      </div>
</div>
