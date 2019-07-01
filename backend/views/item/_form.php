<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Item $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Name...', 'maxlength' => 255]],

            'description' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Description...', 'maxlength' => 255]],

            'category_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Category ID...']],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...', 'maxlength' => 255]],

            'price' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'discount' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Discount...']],

            'created_by_user_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Created By User ID...']],

            'account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Account ID...']],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'tax' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
