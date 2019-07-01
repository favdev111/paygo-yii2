<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\widgets\Alert;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>  
 
   <?php /* 
      <div class="block-center mt-4 wd-xl">
         <!-- START panel-->
         <div class="card card-flat">
				<div class="card-header text-center bg-dark">
				   <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(true); ?>">
					  <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="Image" class="block-center rounded">
				   </a>
				</div>
				<div class="card-body">
						<p class="text-center py-2">SIGN IN TO CONTINUE</p>
						<?= Alert::widget() ?>
						<?php $form = ActiveForm::begin(['id' => 'login-form','class'=>'mb-3']); ?>

 
                 
						<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
 
						<?= $form->field($model, 'password')->passwordInput() ?>


						<div class="checkbox c-checkbox float-left mt-0">
                        		<span class="fa fa-check"></span><label><?= $form->field($model, 'rememberMe')->checkbox() ?></label>
						</div>

						<!-- <div class="checkbox c-checkbox float-left mt-0"><label><input type="checkbox" value="" name="remember"><span class="fa fa-check"></span> Remember Me</label></div> -->

						<div class="clearfix">
						<div class="float-right">
						<?= Html::a('Forgot your password?', ['site/passwordreset'],['class'=>'text-muted']) ?>
						</div>
                  </div>

                  <button type="submit" class="btn btn-primary mt-lg">Login</button>
                  
                  <a class="btn btn-success mt-lg" href="<?php echo Yii::$app->urlManager->createUrl('user/signup'); ?>">Singup</a>
 

               <?php ActiveForm::end(); ?>

            </div>

			<div class="p-3 text-center"><span class="mr-2">&copy;</span><span>2019 - PayGo</span><br><span>PayGo Technologies Pvt. Ltd.</span></div>
      </div>
*/ ?>

<div class="block-center mt-4 wd-xxl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(true); ?>">
					  <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="Image" class="block-center rounded">
				   </a>
			   </div>
            <div class="card-body">
               <p class="text-center py-2">SIGN IN TO CONTINUE.</p>
<<<<<<< HEAD
               <?= Alert::widget() ?>
               <?php $form = ActiveForm::begin(['id' => 'login-form','class'=>'mb-3']); ?>
                  
                  <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                  <?= $form->field($model, 'password')->passwordInput() ?>
                  
                  <div class="clearfix">
                     <div class="float-left">
                        <?= $form->field($model, 'rememberMe', [
                           ])
                              ->checkbox([], false)
                              ->label("Remember me") ?> 
=======
               <?php $form = ActiveForm::begin(
                  [
                     'id' => 'login-form',
                     'fieldConfig' => [
                        'options' => [
                            'tag' => false,
                        ],
                     ],
                     'options' => [
                        'class' => 'mb-3'
                     ]
                  ]); ?>

                   
                  <div class="form-group">
                     <div class="input-group with-focus"> <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control border-right-0','placeholder'=>'Enter email or username','required'])->label(false) ?>
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-envelope"></em></span></div>
>>>>>>> fbb42794ca6c21c7d2261d672273c7777ed5728b
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                     <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control border-right-0','placeholder'=>'Password','required'])->label(false) ?>   
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span></div>
                     </div>
                  </div>
                  
                  <div class="clearfix"> 
                     <div class="checkbox c-checkbox float-left mt-0"><label><input type="checkbox" value="" name="remember"><span class="fa fa-check"></span> Remember Me</label></div>
                     <div class="float-right"><?= Html::a('Forgot your password?', ['site/passwordreset'],['class'=>'text-muted']) ?></div>
                  </div> 

				      <button class="btn btn-block btn-primary mt-3" type="submit">Login</button>

              <?php ActiveForm::end(); ?>
               <p class="pt-3 text-center">Need to Signup?</p><a class="btn btn-block btn-secondary" href="<?php echo Yii::$app->urlManager->createUrl('user/signup'); ?>">Register Now</a>
            </div>
         </div><!-- END card-->
         
      </div>
  