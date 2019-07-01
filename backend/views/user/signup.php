
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
 

<div class="block-center mt-4  wd-xl">
        <!-- START panel-->
        <div class="card card-flat">  
        <div class="card-header text-center bg-dark">
            <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(true); ?>">
                <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="Image" class="block-center rounded">
            </a> 
        </div>   
        <div class="card-body">
                <p class="text-center py-2">SIGNUP TO GET INSTANT ACCESS.</p>

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
                    <p class="error"></p>

                    <div id="step1"> 
                        <?=Html::activeRadioList($model, 'accounttype', ['1'=>'Personal Account',2=>'Business Account'], [
                            'item' => function ($index, $label, $name, $checked, $value) {

                                $class="bg-info";
                                if($index==0){
                                    $class="bg-success";
                                }
                                return '<div class="form-group" ><div class="col-lg-12">
                                <label for="accounttype'.$index.'" class="col-lg-12 accounttype">
                                '.Html::radio($name, $checked, ['value'  => $value,'class'=>'required','style'=>'display:none' ,'id'=>'accounttype'.$index]).'
                                        <div class="card text-white '.$class.' mb-3">
                                            <div class="card-header">&nbsp;</div>
                                            <div class="card-body">
                                                <h3 class="card-title">'.$label.'</h3>
                                                <p class="card-text">&nbsp;</p>
                                            </div>
                                        </div>
                                </label>
                            </div></div>';

                            }
                        ])?> 
                        <button class="btn btn-block btnnext btn-primary mt-3" name="signup-button" id='btnnext' data-id='1' type="button">Next</button>
                        <p class="pt-3 text-center">Have an account?</p><a class="btn btn-block btn-secondary" href="<?php echo Yii::$app->urlManager->createUrl('site/login'); ?>">Signup</a>
                    </div>
                <?php 
                /* 
                <fieldset class="row" id="step2" style="display:none;">
                    <legend>Personal Details</legend>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <?= $form->field($model, 'firstname')->textInput(['autofocus' => true,'class'=>'form-control required']) ?>
                        </div>
                        <div class="col-lg-6">
                            <?= $form->field($model, 'lastname')->textInput(['class'=>'form-control required']) ?>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <?= $form->field($model, 'email')->textInput(['class'=>'form-control required']);?>
                        </div>
                        <div class="col-lg-6">
                                <?= $form->field($model, 'mobile')->textInput(['class'=>'form-control required']);?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6">
                            <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control required']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::Button('Next', ['class' => 'btn btnnext btn-primary mt-lg', 'name' => 'signup-button','id'=>'btnnext','data-id'=>'2']) ?>
                    </div>

                </fieldset>
                <fieldset class="row" id="step3" style="display:none;">
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
                    <div class="form-group">
                        <?= Html::Button('Next', ['class' => 'btn btnnext btn-primary mt-lg', 'name' => 'signup-button','id'=>'btnnext','data-id'=>'2']) ?>
                    </div>
                </fieldset>
                <fieldset class="row" id="step4" style="display:none;">
                    <legend>Address Details</legend>

                    <div class="form-group">
                        <?= Html::Button('Next', ['class' => 'btn btnnext btn-primary mt-lg', 'name' => 'signup-button','id'=>'btnnext','data-id'=>'2']) ?>
                    </div>
                </fieldset>
                */ 
                ?>       
               <?php ActiveForm::end(); ?>
        </div> 
    </div>
</div>

<?php  

$this->registerJsFile(Yii::$app->getUrlManager()->getBaseUrl().'/vendor/jquery-validation/dist/jquery.validate.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Yii::$app->getUrlManager()->getBaseUrl().'/vendor/jquery-validation/dist/additional-methods.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Yii::$app->getUrlManager()->getBaseUrl().'/vendor/jquery-steps/build/jquery.steps.js',['depends' => [\yii\web\JqueryAsset::className()]]);

$script = <<< JS
 (function() {
    $('input[type="radio"]').click(function() {
       $(".accounttype").each(function(){
        $(this).removeClass('active');
       });
       $(this).parent().addClass('active');
   });


   $(".btnnext").on("click",function(){
    var step = $(this).attr("data-id");

    if(step==1){
        if (!$('#accounttype0').is(":checked") && !$('#accounttype1').is(":checked"))
        {
          $("p.error").html("<lable class='has-error'>Please Select account type</lable>");
        }else {
            $("p.error").html("");

            $("#step1").hide();

            if($('#accounttype0').is(":checked")){

                $("#step2").show();

            }else if($('#accounttype1').is(":checked")){

                $("#step3").show();
            }

        }
    }

   });

})();
JS;
$this->registerJs($script);
?>
