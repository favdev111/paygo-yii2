<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\AccountType $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Account Type',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-type-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
