<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\AccountRelation $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="account-relation-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'payee_account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payee Account ID...']],

            'payor_account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payor Account ID...']],

            'payee_account_relation_type_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payee Account Relation Type ID...']],

            'payor_account_relation_type_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payor Account Relation Type ID...']],

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
