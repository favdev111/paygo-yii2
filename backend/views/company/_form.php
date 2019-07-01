<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Company $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Name...', 'maxlength' => 255]],

            'subdomain' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Subdomain...', 'maxlength' => 255]],

            'email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Email...', 'maxlength' => 255]],

            'phone' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Phone...', 'maxlength' => 255]],

            'mobile' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Mobile...', 'maxlength' => 255]],

            'fax' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Fax...', 'maxlength' => 255]],

            'support_email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Support Email...', 'maxlength' => 255]],

            'billing_email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Billing Email...', 'maxlength' => 255]],

            'privacy' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Privacy...','rows' => 6]],

            'terms' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Terms...','rows' => 6]],

            'address_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Address ID...']],

            'user_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter User ID...']],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
