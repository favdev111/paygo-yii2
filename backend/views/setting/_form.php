<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>
<div class="card-body">
	<?php if(\Yii::$app->session->getFlash('success')){ ?>
	<div class="alert alert-success" role="alert">
		<?=\Yii::$app->session->getFlash('success')?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<?php } ?>
	
	<?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'smtp_server' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'SMTP Server ...']],
        ]
    ]);
	
	echo $form->field($model, 'use_authentication')->label('User Authentication')->dropDownList(['yes' => 'yes', 'no' => 'no'],['prompt'=>'Select Option']);;
	
	echo $form->field($model, 'use_secure_connection')->label('User Secure Connection')->dropDownList(['yes' => 'yes', 'no' => 'no'],['prompt'=>'Select Option']);;
	
	echo $form->field($model, 'use_secure_connection_type')->label('User Secure Connection Type')->dropDownList(['tls' => 'tls', 'ssl' => 'ssl'],['prompt'=>'Select Option']);;

    echo $form->field($model, 'smtp_username')->label('SMTP Username')->textInput(['placeholder' => 'SMTP Username ...']);

    echo $form->field($model, 'smtp_password')->label('SMTP Password')->textInput(['placeholder' => 'SMTP Password']);

    echo $form->field($model, 'smtp_port')->label('SMTP Port')->textInput(['placeholder' => 'SMTP Port']);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>
	
</div>