<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\City $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'City',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
