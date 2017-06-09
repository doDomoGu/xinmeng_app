<?php

use yii\db\Migration;

class m170609_060926_ucenter_app extends Migration
{
    public function init(){
        $this->db = Yii::$app->db_ucenter;
        parent::init();
    }

    public function up()
    {
        $this->createTable('{{%app}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(200)->notNull(),
            'alias' => $this->string(200)->notNull(),
            'status' => $this->smallInteger(1)->notNull()
        ]);


        $this->createTable('{{%user_app_auth}}', [
            'app_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'status' => $this->smallInteger(1)->notNull()
        ]);
        $this->addPrimaryKey('primary_key','{{%user_app_auth}}',['app_id','user_id']);
    }

    public function down()
    {
        $this->dropTable('{{%user_app_auth}}');

        $this->dropTable('{{%app}}');
    }
}
