<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;



class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
   
    public function actionIndex()
    {
        $carUrl =  Url::to('');
        
        if($carUrl=="/site"){    
            throw new \yii\web\NotFoundHttpException;
        }else{
            return $this->render('index');
        }
    }
   

}


