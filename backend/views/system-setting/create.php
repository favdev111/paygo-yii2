<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\SystemSetting $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'System Setting',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'System Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-setting-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
