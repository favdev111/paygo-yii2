<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Address $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="address-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'address' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Address...', 'maxlength' => 255]],

            'address2' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Address2...', 'maxlength' => 255]],

            'country_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Country ID...']],

            'state_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter State ID...']],

            'city_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter City ID...']],

            'zipcode' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Zipcode...', 'maxlength' => 255]],

            'account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Account ID...']],

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
