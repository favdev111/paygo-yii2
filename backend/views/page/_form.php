<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Page $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'page_title' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Page Title...', 'maxlength' => 199]],

            'page_slug' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Page Slug...', 'maxlength' => 199]],

            'page_content' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Page Content...','rows' => 6]],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
