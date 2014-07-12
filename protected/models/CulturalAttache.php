<?php

/**
 * This is the model class for table "tbl_cultural_attache".
 *
 * The followings are the available columns in table 'tbl_cultural_attache':
 * @property integer $id
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $address
 * @property integer $zip_code
 * @property string $email
 * @property string $tel
 * @property string $fax
 * @property string $mailbox
 * @property string $create_time
 * @property string $update_time
 * @property integer $create_user_id
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property CulturalAttacheManager[] $culturalAttacheManagers
 */
class CulturalAttache extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_cultural_attache';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('country, email', 'unique'),
                        array('email', 'email'),
			array('country, city, address, zip_code, email, tel', 'required'),
			array('zip_code, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('country, state, city', 'length', 'max'=>64),
			array('address, email, tel, fax, mailbox', 'length', 'max'=>255),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, country, state, city, address, zip_code, email, tel, fax, mailbox, create_time, update_time, create_user_id, update_user_id', 'safe', 'on'=>'search'),
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
			'culturalAttacheManagers' => array(self::HAS_MANY, 'CulturalAttacheManager', 'ca_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'uid' => 'User ID',
			'country' => 'Country',
			'state' => 'State',
			'city' => 'City',
			'address' => 'Address',
			'zip_code' => 'Zip Code',
			'email' => 'Email',
			'tel' => 'Tel',
			'fax' => 'Fax',
			'mailbox' => 'Mailbox',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'create_user_id' => 'Create User',
			'update_user_id' => 'Update User',
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
                $criteria->compare('uid',$this->uid, true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip_code',$this->zip_code);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('mailbox',$this->mailbox,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CulturalAttache the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
