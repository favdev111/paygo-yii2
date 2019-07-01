<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\PaymentGateway $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="payment-gateway-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Name...', 'maxlength' => 255]],

            'bank' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Bank...', 'maxlength' => 255]],

            'url' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Url...', 'maxlength' => 255]],

            'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Username...', 'maxlength' => 255]],

            'password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter Password...', 'maxlength' => 255]],

            'signature' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Signature...', 'maxlength' => 1024]],

            'account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Account ID...']],

            'currency_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Currency ID...']],

            'logo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Logo...', 'maxlength' => 255]],

            'large_logo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Large Logo...', 'maxlength' => 255]],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
