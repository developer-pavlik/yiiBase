<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;

class RegController extends Controller {

    public function actionIndex() {
        return $this->render('index.tpl', ['username' => 'Alex']);
    }
    
}
