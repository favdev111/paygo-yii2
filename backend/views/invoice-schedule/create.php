<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\InvoiceSchedule $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Invoice Schedule',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Invoice Schedules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-schedule-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
