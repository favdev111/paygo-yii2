<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\search\UserSession $searchModel
 */

$this->title = Yii::t('app', 'User Sessions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-session-index">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* echo Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'User Session',
]), ['create'], ['class' => 'btn btn-success'])*/  ?>
    </p>

    <?php Pjax::begin(); echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'username',
            'mobile',
            'email:email',
//            'ip', 
//            'device', 
//            'browser', 
//            'device_mac_address', 
//            'status', 
//            'browser_version', 
//            'account_id', 
//            'country_id', 
//            ['attribute' => 'created','format' => ['datetime',(isset(Yii::$app->modules['datecontrol']['displaySettings']['datetime'])) ? Yii::$app->modules['datecontrol']['displaySettings']['datetime'] : 'd-m-Y H:i:s A']], 
//            ['attribute' => 'updated','format' => ['datetime',(isset(Yii::$app->modules['datecontrol']['displaySettings']['datetime'])) ? Yii::$app->modules['datecontrol']['displaySettings']['datetime'] : 'd-m-Y H:i:s A']], 
//            'flag', 
//            ['attribute' => 'login_datetime','format' => ['datetime',(isset(Yii::$app->modules['datecontrol']['displaySettings']['datetime'])) ? Yii::$app->modules['datecontrol']['displaySettings']['datetime'] : 'd-m-Y H:i:s A']], 
//            'logout_datetime:datetime', 

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
                            Yii::$app->urlManager->createUrl(['user-session/view', 'id' => $model->id, 'edit' => 't']),
                            ['title' => Yii::t('yii', 'Edit'),]
                        );
                    }
                ],
            ],
        ],
        'responsive' => true,
        'hover' => true,
        'condensed' => true,
        'floatHeader' => true,

        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i> '.Html::encode($this->title).' </h3>',
            'type' => 'info',
            'before' => Html::a('<i class="glyphicon glyphicon-plus"></i> Add', ['create'], ['class' => 'btn btn-success']),
            'after' => Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset List', ['index'], ['class' => 'btn btn-info']),
            'showFooter' => false
        ],
    ]); Pjax::end(); ?>

</div>
