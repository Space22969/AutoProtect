<?php
 
use yii\db\Migration;
 
class m171005_064550_create_user_table extends Migration
{
 
    public function up()
    {
        $tableOptions = null;
 
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
 
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'firstname' => $this->string(100)->notNull(),
            'secondname' => $this->string(100)->notNull(),
            'phone' => $this->string(20)->notNull(),
        ], $tableOptions);
    }
 
    public function down()
    {
        $this->dropTable('user');
    }
 
}