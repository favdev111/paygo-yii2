<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\State $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'State',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'States'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
