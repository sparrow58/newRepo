<?php

class m140219_160133_create_CA_Usr_CaMgr extends CDbMigration
{
	/*public function up()
	{
	}

	public function down()
	{
		echo "m140219_160133_create_CA_Usr_CaMgr does not support migration down.\n";
		return false;
	}*/

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
            // Create Cultural Attache Table
            $this->createTable('tbl_Cultural_Attache', array(
                'id' => 'pk',
                'country' => 'varchar(64) NOT NULL',
                'state' => 'varchar(64) DEFAULT NULL',
                'city' => 'varchar(64) NOT NULL',
                'address' => 'string NOT NULL',
                'zip_code' => 'int(9) NOT NULL',
                'email' => 'string NOT NULL',
                'tel' => 'string NOT NULL',
                'fax' => 'string DEFAULT NULL',
                'mailbox' => 'string DEFAULT NULL',
                'create_time' => 'datetime DEFAULT NULL',
                'update_time' => 'datetime DEFAULT NULL',
                'create_user_id' => 'int(11) DEFAULT NULL',
                'update_user_id' => 'int(11) DEFAULT NULL',
                ), 'ENGINE=InnoDB');
            
            // Create Cultural Attache Manager Table
            $this->createTable('tbl_Cultural_Attache_Manager', array(
                'id' => 'pk',
                'first_name' => 'string NOT NULL',
                'last_name' => 'string NOT NULL',
                'email' => 'string NOT NULL',
                'hire_date' =>'datetime NOT NULL',
                'ca_id' => 'int(11) DEFAULT NULL',
                'create_time' => 'datetime DEFAULT NULL',
                'update_time' => 'datetime DEFAULT NULL',
                'create_user_id' => 'int(11) DEFAULT NULL',
                'update_user_id' => 'int(11) DEFAULT NULL',
            ), 'ENGINE=InnoDB');
            
            // Create Users Table
          /*  $this->createTable('tbl_User', array(
                'id' => 'pk',
                'username' => 'string NOT NULL',
                'password' => 'string NOT NULL',
                'email' => 'string NOT NULL',
                'last_login_time' => 'datetime DEFAULT NULL',
		'create_time' => 'datetime DEFAULT NULL',
		'create_user_id' => 'int(11) DEFAULT NULL',
		'update_time' => 'datetime DEFAULT NULL',
		'update_user_id' => 'int(11) DEFAULT NULL',
		), 'ENGINE=InnoDB');*/
            
            //foreign key relationships
		
		//the tbl_issue.project_id is a reference to tbl_project.id 
		$this->addForeignKey("fk_CAMgr_CA", "tbl_Cultural_Attache_Manager", "ca_id", "tbl_Cultural_Attache", "id", "CASCADE", "RESTRICT");
	}

	public function safeDown()
	{
            $this->truncateTable('tbl_Cultural_Attache_Manager');
            $this->truncateTable('tbl_Cultural_Attache');
            //$this->truncateTable('tbl_User');
            $this->dropTable('tbl_Cultural_Attache_Manager');
            $this->dropTable('tbl_Cultural_Attache');
            //$this->dropTable('tbl_User');
	}
	
}