<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\ItemCategory $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="item-category-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'category' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Category...', 'maxlength' => 255]],

            'description' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Description...', 'maxlength' => 255]],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...', 'maxlength' => 255]],

            'parent_category_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Parent Category ID...']],

            'created_by_user_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Created By User ID...']],

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
