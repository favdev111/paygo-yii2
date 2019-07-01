<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Invoice $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Invoice',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Invoices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
