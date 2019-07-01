<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\SmsTemplate $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Sms Template',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sms Templates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sms-template-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
