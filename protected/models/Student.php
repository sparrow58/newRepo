<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $id
 * @property integer $u_id
 * @property integer $ca_id
 * @property string $first_name
 * @property string $middel_name
 * @property string $last_name
 * @property string $birthdate
 * @property string $gender
 * @property string $email
 * @property string $address
 * @property string $mobile_number
 * @property string $Picture
 *
 * The followings are the available model relations:
 * @property Basicacademicinfo[] $basicacademicinfos
 * @property Scholarship[] $scholarships
 * @property CulturalAttache $ca
 * @property Users $u
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, middel_name, last_name, birthdate, gender, email, address, mobile_number', 'required'),
			array('u_id, ca_id', 'numerical', 'integerOnly'=>true),
			array('first_name, middel_name, last_name, gender, email, address, mobile_number', 'length', 'max'=>255),
			array('Picture', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, u_id, ca_id, first_name, middel_name, last_name, birthdate, gender, email, address, mobile_number, Picture', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'basicacademicinfos' => array(self::HAS_MANY, 'Basicacademicinfo', 'std_id'),
			'scholarships' => array(self::HAS_MANY, 'Scholarship', 'std_id'),
			'ca' => array(self::BELONGS_TO, 'CulturalAttache', 'ca_id'),
			'u' => array(self::BELONGS_TO, 'Users', 'u_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'u_id' => 'U',
			'ca_id' => 'Ca',
			'first_name' => 'First Name',
			'middel_name' => 'Middel Name',
			'last_name' => 'Last Name',
			'birthdate' => 'Birthdate',
			'gender' => 'Gender',
			'email' => 'Email',
			'address' => 'Address',
			'mobile_number' => 'Mobile Number',
			'Picture' => 'Picture',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('u_id',$this->u_id);
		$criteria->compare('ca_id',$this->ca_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middel_name',$this->middel_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('Picture',$this->Picture,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
