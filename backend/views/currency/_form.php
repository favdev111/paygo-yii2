<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Currency $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="currency-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'country' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Country...', 'maxlength' => 100]],

            'currency' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Currency...', 'maxlength' => 100]],

            'code' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Code...', 'maxlength' => 100]],

            'symbol' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Symbol...', 'maxlength' => 100]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
