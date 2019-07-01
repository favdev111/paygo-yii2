<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\ItemCategory $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Item Category',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Item Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-category-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
