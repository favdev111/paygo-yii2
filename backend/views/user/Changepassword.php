<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Changepassword */
/* @var $form ActiveForm */
$this->title = 'Change Password';
?>
 <div class="col-md-6 offset-3">
    <div class="card card-default"> 
        
        <div class="card-header">
            <?= Html::encode($this->title) ?>
        </div> 
        <div class="card-body">  
            <?php $form = ActiveForm::begin(); ?>  
                <div class="align-items-center">
                    <div class="form-group">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'confirm_password')->passwordInput() ?>
                    </div>    

                    <div class="form-group">
                        <?= Html::submitButton('Change', ['class' => 'btn btn-primary']) ?>
                    </div> 
            <?php ActiveForm::end(); ?>
            </div>
        </div>
        
    </div> 
</div>