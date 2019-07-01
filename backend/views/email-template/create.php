<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\EmailTemplate $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Email Template',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Email Templates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-template-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
