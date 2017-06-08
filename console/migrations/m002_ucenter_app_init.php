<?php

use yii\db\Migration;

class m001_user_init extends Migration
{

    public function init(){
        $this->db = Yii::$app->db_ucenter;
        parent::init();
    }

    public function up()
    {
        $this->createTable('{{%user_app_auth}}', [
            'app_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'is_enable' => $this->smallInteger(1)->notNull()
        ]);
        $this->addPrimaryKey('primary_key','{{%user_app_auth}}',['app_id','user_id']);
    }

    public function down()
    {
        $this->dropTable('{{%user_app_auth}}');
    }
}
