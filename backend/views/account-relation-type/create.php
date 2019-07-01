<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\AccountRelationType $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Account Relation Type',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Relation Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-relation-type-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
