<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Language $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Language',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="language-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
