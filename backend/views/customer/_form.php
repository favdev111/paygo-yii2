<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Customer $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="customer-form">

<?php 
    
    
$form = ActiveForm::begin(
    ['type' => ActiveForm::TYPE_HORIZONTAL]); 
    $listData=['1'=>'Business', '2'=>'Personal'];    
    echo Form::widget([
        
        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'first_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter First Name...', 'maxlength' => 255]],

            'last_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Last Name...', 'maxlength' => 255]],

            'customer_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Customer Name...', 'maxlength' => 255]],

            'email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Email...', 'maxlength' => 255]],
            
            'type' => ['type' => Form::INPUT_DROPDOWN_LIST, 'hint' => 'Select the user type', 'items' => $listData],

            'address_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Address ID...']],

            'user_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter User ID...']],

            'company_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Company ID...']],

            'created' => ['2019-06-03 00:00:00'],
//            ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'mobile' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Mobile...', 'maxlength' => 255]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
