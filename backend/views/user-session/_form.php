<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\UserSession $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-session-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'user_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter User ID...']],

            'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Username...', 'maxlength' => 255]],

            'mobile' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Mobile...', 'maxlength' => 255]],

            'email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Email...', 'maxlength' => 255]],

            'ip' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Ip...', 'maxlength' => 255]],

            'device' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Device...', 'maxlength' => 32]],

            'browser' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Browser...', 'maxlength' => 255]],

            'browser_version' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Browser Version...', 'maxlength' => 255]],

            'account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Account ID...']],

            'country_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Country ID...']],

            'login_datetime' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'logout_datetime' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Logout Datetime...']],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...']],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'device_mac_address' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Device Mac Address...', 'maxlength' => 255]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
