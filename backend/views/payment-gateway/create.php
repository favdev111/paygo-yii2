<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\PaymentGateway $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Payment Gateway',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Payment Gateways'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-gateway-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
