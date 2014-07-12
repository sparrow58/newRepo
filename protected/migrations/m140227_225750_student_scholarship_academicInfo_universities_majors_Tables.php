<?php

class m140227_225750_student_scholarship_academicInfo_universities_majors_Tables extends CDbMigration
{
	/*public function up()
	{
	}

	public function down()
	{
		echo "m140227_225750_student_scholarship_academicInfo_universities_majors_Tables does not support migration down.\n";
		return false;
	}*/

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
            $this->createTable('Student', array(
                'id'=>'pk',
                /****************/
                'u_id'=>'int(11) DEFAULT NULL',
                'ca_id'=>'int(11) DEFAULT NULL',
                /**************/
                'first_name'=>'string NOT NULL',
                'middel_name'=>'string NOT NULL',
                'last_name'=>'string NOT NULL',
                'birthdate'=>'datetime NOT NULL',
                'gender'=>'string NOT NULL',
                'email'=>'string NOT NULL',
                'address'=>'string NOT NULL',
                'mobile_number'=>'string NOT NULL',
                'Picture'=>'binary DEFAULT NULL',
                ), 'ENGINE=InnoDB');
            
            $this->createTable('Scholarship', array(
                'id'=>'pk',
                /****************/
                'std_id'=>'int(11) DEFAULT NULL',
                /****************/
                'recieving_date'=>'datetime NOT NULL',
                'scholarship_type'=>'string NOT NULL',
                'high_school_avarege'=>'int(5) NOT NULL',
                'high_school_education_section'=>'string NOT NULL',
                'high_school_graduation_date'=>'datetime NOT NULL',
                ), 'ENGINE=InnoDB');
            
            $this->createTable('University', array(
                'id'=>'pk',
                /****************/
                'ca_id'=>'int(11) DEFAULT NULL',
                /****************/
                'name'=>'string NOT NULL',
                'location'=>'string NOT NULL',
                'email'=>'string NOT NULL',
                'telphone_number'=>'string NOT NULL',
                'fax_number'=>'string DEFAULT NULL',
                ), 'ENGINE=InnoDB');
            
            $this->createTable('Major', array(
                'name'=>'string NOT NULL',
                /*****************/
                'uni_id'=>'int(11) DEFAULT NULL',
                /**************/
                'major_credit'=>'int(3) DEFAULT NULL',
                'major_courses_number'=>'int(3) DEFAULT NULL',
                ), 'ENGINE=InnoDB');
            
            $this->createTable('BasicAcademicInfo', array(
                /****************/
                'std_id'=>'int(11) DEFAULT NULL',
                'uni_id'=>'int(11) DEFAULT NULL',
                'maj_name'=>'string DEFAULT NULL',
                /****************/
                'registration_date'=>'datetime NOT NULL',
                'student_university_no'=>'int(15) DEFAULT NULL',
                ), 'ENGINE=InnoDB');
            
            $this->addPrimaryKey("majName_uniID_pk","Major",("name,uni_id"));
            $this->addForeignKey("stu_user_fk", "Student", "u_id", "users", "id", "CASCADE", "RESTRICT");
            $this->addForeignKey("stu_ca_fk", "Student", "ca_id", "tbl_cultural_attache", "id", "CASCADE", "RESTRICT");
            $this->addForeignKey("schoolar_student_fk", "Scholarship", "std_id", "Student", "id", "CASCADE", "RESTRICT");
            $this->addForeignKey("university_ca_fk", "University", "ca_id", "tbl_cultural_attache", "id", "CASCADE", "RESTRICT");
            $this->addForeignKey("major_university_pk", "Major", "uni_id", "University", "id", "CASCADE", "RESTRICT");
            $this->addForeignKey("basicAcademic_student_fk", "BasicAcademicInfo", "std_id", "Student", "id", "CASCADE", "RESTRICT");
            $this->addForeignKey("basicAcademic_university_fk", "BasicAcademicInfo", "uni_id", "University", "id", "CASCADE", "RESTRICT");
            $this->addForeignKey("BasicAcademicInfo_major_fk", "BasicAcademicInfo", "maj_name", "Major", "name", "CASCADE", "RESTRICT");
            
            //$this->addForeignKey("fkname", "fktable", "fkcol", "reftable", "refcol", "CASCADE", "RESTRICT");
	}

	public function safeDown()
	{
            $this->dropForeignKey("stu_user_fk", "Student");
            $this->dropForeignKey("stu_ca_fk", "Student");
            $this->dropForeignKey("schoolar_student_fk", "Scholarship");
            $this->dropForeignKey("university_ca_fk", "University");
            $this->dropForeignKey("major_university_pk", "Major");
            $this->dropForeignKey("basicAcademic_student_fk", "BasicAcademicInfo");
            $this->dropForeignKey("basicAcademic_university_fk", "BasicAcademicInfo");
            $this->dropForeignKey("BasicAcademicInfo_major_fk", "BasicAcademicInfo");
            
            $this->dropTable('Student');
            $this->dropTable('Scholarship');
            $this->dropTable('University');
            $this->dropTable('BasicAcademicInfo');
            $this->dropTable('Major');
	}
	
}