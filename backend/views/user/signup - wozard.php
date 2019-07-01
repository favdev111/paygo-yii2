
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
    <section class="section-container">
    <?php /*
    <div class="block-center mt-5 col-8">

            <div class="card card-flat">

                    <div class="card-header text-center bg-dark">
                        <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(true); ?>">
                            <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="Image" class="block-center rounded">
                        </a>
                    </div>

                    <div class="card-body">
                        <?php $form = ActiveForm::begin(
                            [
                            'id' => 'example-form',
                            'options' => ['class' => 'form-horizontal'],

                            ]);
                        ?>

                            <div>

                                <h4>Account Type<br></h4>
                                <fieldset>
                                <div class="form-row align-items-center">
                                    <div class="col-lg-6 offset-5 mt-5">
                                        <?=Html::activeRadioList($model, 'accounttype', ['1'=>'Personal Account',2=>'Business Account'], [
                                            'item' => function ($index, $label, $name, $checked, $value) {
                                                return '<div class="c-radio"><label for="accounttype'.$index.'">' . Html::radio($name, $checked, ['value'  => $value,'class'=>'required','id'=>'accounttype'.$index]).'<span class="fa fa-circle"></span>'.$label.'<em class="red">*</em> </label></div>';
                                            }
                                        ])?>

                                    </div>
                                 </div>
                                </fieldset>

                                <h4>Personal Details</h4>
                                <fieldset>
                                    <legend>Personal Details</legend>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <?= $form->field($model, 'firstname')->textInput(['autofocus' => true,'class'=>'required form-control','data-parsley-type'=>'alphanum']) ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <?= $form->field($model, 'lastname')->textInput(['class'=>'required form-control','data-parsley-type'=>'alphanum']) ?>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <?= $form->field($model, 'email')->textInput(['class'=>'required form-control','data-parsley-type'=>'email']) ?>
                                        </div>
                                        <div class="col-lg-6">
                                                <?= $form->field($model, 'mobile')->textInput(['class'=>'required form-control','autocomplete'=>"off",'data-parsley-type'=>'integer']) ?>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <?= $form->field($model, 'password')->passwordInput(['class'=>'required form-control','autocomplete'=>"off"]) ?>
                                        </div>
                                    </div>
                                </fieldset>

                                <h4>Business Account</h4>
                                <fieldset id="businessaccount">
                                    <legend>Business Details</legend>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <?= $form->field($model, 'businessname')->textInput(['autofocus' => true,'class'=>'form-control']) ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <?= $form->field($model, 'businessemail')->textInput(['class'=>'form-control']) ?>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                                <?= $form->field($model, 'businessmobile')->textInput(['class'=>'form-control','autocomplete'=>"off"]) ?>
                                        </div>
                                    </div>
                                </fieldset>

                                <h4>Agree<br></h4>
                                <fieldset>
                                <p class="lead">One last check</p>
                                <div class="checkbox c-checkbox"><label><input type="checkbox" required="required" name="terms"><span class="fa fa-check"></span>I agree with the Terms and Conditions.</label></div>
                                </fieldset>
                            </div>
                    <?php ActiveForm::end(); ?>
                </div>
        </div>
    </div>
    */ ?>
    </section>
</div>
<?php  $this->registerAssetBundle(yii\web\JqueryAsset::className(), \yii\web\View::POS_HEAD);?>
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery-validation/dist/additional-methods.js"></script><!-- JQUERY STEPS-->
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery-steps/build/jquery.steps.js"></script><!-- =============== APP SCRIPTS ===============-->

<?php
/*
$script = <<< JS
    (function() {
    'use strict';

    $(initWizard);

    function initWizard() {

        if (!$.fn.validate) return;

        // FORM EXAMPLE
        // -----------------------------------
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h4",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();

            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                // Submit form
                $(this).submit();
            }
        });

        // VERTICAL
        // -----------------------------------

        $("#example-vertical").steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        });

    }

})();
JS;
$this->registerJs($script);
*/
?>
