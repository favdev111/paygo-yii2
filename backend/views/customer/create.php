<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Customer $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Customer',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="customer-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <h3 style="color: blue;"><?php if(Yii::$app->session->hasFlash('success')){echo Yii::$app->session->getFlash('success');}?></h3>
                                    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
