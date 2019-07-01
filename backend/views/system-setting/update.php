<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\SystemSetting $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'System Setting',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'System Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="system-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
