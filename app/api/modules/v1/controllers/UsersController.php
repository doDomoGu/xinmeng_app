<?php
namespace api\modules\v1\controllers;

/*use ucenter\models\UserWxOpenid;
use ucenter\models\UserWxSession;*/
use ucenter\models\User;
use yii\data\ActiveDataProvider;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;
use yii\web\Response;
use Yii;

class UsersController extends ActiveController
{
    public function init(){
        $this->modelClass = User::className();
        parent::init();
    }


    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats'] = ['application/json' => Response::FORMAT_JSON];
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
            // 设置token名称，默认是access-token
            'tokenParam' => 'token',
            'optional' => [
                'index',
                'signup-test',
                'view'
            ],
        ];
        return $behaviors;
    }


    public function actions()
    {
        $actions = parent::actions();
        //unset($actions['delete'], $actions['create']);
        // 注销系统自带的实现方法
        unset($actions['index']);

        //unset($actions['create']);
        //unset($actions['update']);
        //unset($actions['delete']);
        //unset($actions['options']);
        return $actions;
    }

    public function verbs(){
        return [
            'index' => ['POST', 'GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }

    public function actionDelete(){
        echo 1;exit;
    }

    public function actionIndex(){
        $arr = [
          "1"=>["id"=>1,"name"=>"Dan111"],
          "2"=>["id"=>2,"name"=>"Marie222"],
          "3"=>["id"=>3,"name"=>"Jessie333"]
        ];

        /*{
            "1": {
            "id": "1",
    "name": "Dan"
  },
  "2": {
            "id": "2",
    "name": "Marie"
  },
  "3": {
            "id": "3",
    "name": "Jessie"
  }
}*/

        return $arr;
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
