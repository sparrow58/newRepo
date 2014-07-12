<?php

class m140224_183653_alter_CA_add_userID_and_CAMGR_Status extends CDbMigration
{
/*	
    public function up()
	{
	}

	public function down()
	{
		echo "m140224_183653_alter_CA_add_userID_and_CAMGR_Status does not support migration down.\n";
		return false;
	}
*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
            $this->addColumn('tbl_Cultural_Attache', 'uid', 'int(11) DEFAULT NULL');
            $this->addColumn('tbl_Cultural_Attache_Manager', 'mgr_status', 'int(2) DEFAULT NULL');
            $this->addForeignKey("tbl_Cultural_Attache_user", "tbl_Cultural_Attache", "uid","users" , "id", "CASCADE", "RESTRICT");
	}

	public function safeDown()
	{
            $this->dropForeignKey("tbl_Cultural_Attache_user", "tbl_Cultural_Attache");
            $this->dropColumn("tbl_Cultural_Attache", "uid");
            $this->dropColumn("tbl_Cultural_Attache_Manager", "mgr_status");
	}
	
}