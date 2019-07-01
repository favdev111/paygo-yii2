<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\DiscountType $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Discount Type',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Discount Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-type-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
