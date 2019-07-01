<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Account $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="account-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'account_type_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Account Type ID...']],

            'email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Email...', 'maxlength' => 255]],

            'mobile' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Mobile...', 'maxlength' => 255]],

            'privacy' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Privacy...','rows' => 6]],

            'terms' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Terms...','rows' => 6]],

            'smtp_server' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Smtp Server...', 'maxlength' => 255]],

            'use_authentication' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Use Authentication...', 'maxlength' => 255]],

            'use_secure_connection' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Use Secure Connection...', 'maxlength' => 255]],

            'use_secure_connection_type' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Use Secure Connection Type...', 'maxlength' => 255]],

            'smtp_username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Smtp Username...', 'maxlength' => 255]],

            'smtp_password' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Smtp Password...', 'maxlength' => 255]],

            'smtp_port' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Smtp Port...', 'maxlength' => 255]],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'first_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter First Name...', 'maxlength' => 255]],

            'last_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Last Name...', 'maxlength' => 255]],

            'name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Name...', 'maxlength' => 255]],

            'subdomain' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Subdomain...', 'maxlength' => 255]],

            'phone' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Phone...', 'maxlength' => 255]],

            'fax' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Fax...', 'maxlength' => 255]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
