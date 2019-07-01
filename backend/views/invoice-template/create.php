<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\InvoiceTemplate $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Invoice Template',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Invoice Templates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-template-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
