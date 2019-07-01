<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Item $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Item',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
