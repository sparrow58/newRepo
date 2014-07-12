<?php

class m140302_180641_add_majorCode_column_to_major_table extends CDbMigration
{
    /*
	public function up()
	{
	}

	public function down()
	{
		echo "m140302_180641_add_majorCode_column_to_major_table does not support migration down.\n";
		return false;
	}*/

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
            $this->addColumn("Major", "maj_code", "string NOT NULL");
	}

	public function safeDown()
	{
            $this->dropColumn("Major", "maj_code");
	}
	
}