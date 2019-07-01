<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Country $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="country-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'country' => ['type' => TabularForm::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Country...']],

            'code' => ['type' => TabularForm::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Code...']],

            'iso3' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Iso3...', 'maxlength' => 3]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
