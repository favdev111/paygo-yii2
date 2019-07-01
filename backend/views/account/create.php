<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Account $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Account',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
