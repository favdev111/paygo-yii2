<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Address $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Address',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
