<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 */

$this->title = 'SMTP Setting';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::$app->session->getId(), 'url' => ['view', 'id' => Yii::$app->session->getId()]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="col-md-10 offset-1">
	<!-- START card-->
	<div class="card card-default">
		<div class="card-header"><?= Html::encode($this->title) ?></div>
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div><!-- END card-->
</div>

