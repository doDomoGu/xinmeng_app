<?php

use yii\db\Migration;

class m170609_060034_ucenter_user extends Migration
{
    public function init(){
        $this->db = Yii::$app->db_ucenter;
        parent::init();
    }

    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'password_true' => $this->string()->notNull(),
            'nickname' => $this->string()->notNull()->unique(),
            'mobile' => $this->string(20)->notNull()->unique(),
            'email' => $this->string(100)->notNull()->unique(),
            'avatar' => $this->string()->notNull(),
            'gender' => $this->smallInteger()->notNull()->defaultValue(0),
            'birthday' => $this->date(),
            'reg_time' => $this->dateTime(),
            'password_reset_token' => $this->string(6)->unique(),    //忘记密码时用的秘钥
            'auth_key' => $this->string(32)->unique(),             //api 鉴权用的key
            'status' => $this->smallInteger()->notNull()->defaultValue(1)
        ]);
    }

    public function down()
    {

        $this->dropTable('{{%user}}');
    }
}
