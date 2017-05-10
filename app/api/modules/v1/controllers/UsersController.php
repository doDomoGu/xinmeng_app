<?php
namespace api\modules\v1\controllers;

/*use ucenter\models\UserWxOpenid;
use ucenter\models\UserWxSession;*/
use ucenter\models\User;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Response;
use Yii;

class UsersController extends ActiveController
{
    public function init(){
        $this->modelClass = User::className();
        parent::init();
    }



    /*
        public function actionIndex(){
            echo 'index123213213';exit;
        }*/

    /*public function actionView(){
       return [1,2,3];
    }
    public function actionIndex()
     {
         $modelClass = $this->modelClass;
         $query = $modelClass::find();
         return new ActiveDataProvider([
             'query' => $query
         ]);
     }*/
}
