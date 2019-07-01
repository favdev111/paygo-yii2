<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\UserSession $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'User Session',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Sessions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-session-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
