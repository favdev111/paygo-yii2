<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Page $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Page',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
