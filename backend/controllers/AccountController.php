<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\User;

class AccountController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [

        ];
    }

    public function actionHome(){
        return $this->render("home");
    }

}
