<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use common\models\UserSearch;
use  backend\models\SmtpSetting;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class SettingController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    
    public function actionSmtp(){

        $id = \Yii::$app->user->id;
 
        try {
            $model = new SmtpSetting($id);

        } catch (InvalidParamException $e) {
            throw new \yii\web\BadRequestHttpException($e->getMessage());
        }
		
        if ($model->load(\Yii::$app->request->post()) && $model->validate() && $model->updateSmtp()) {
            
            \Yii::$app->session->setFlash('success', 'SMTP Details Saccessfully Updated!');

            return $this->redirect(['/setting/smtp']);
        }
    
        return $this->render('smtpSetting', [
            'model' => $model,
        ]); 
    }
}
