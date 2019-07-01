<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\TaxType $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Tax Type',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tax Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tax-type-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
