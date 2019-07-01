<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\InvoiceDetail $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Invoice Detail',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Invoice Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-detail-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
