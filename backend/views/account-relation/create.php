<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\AccountRelation $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Account Relation',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Relations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-relation-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
