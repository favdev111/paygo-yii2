<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Currency $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Currency',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Currencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currency-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
