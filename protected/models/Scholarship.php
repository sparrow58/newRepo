<?php

/**
 * This is the model class for table "scholarship".
 *
 * The followings are the available columns in table 'scholarship':
 * @property integer $id
 * @property integer $std_id
 * @property string $recieving_date
 * @property string $scholarship_type
 * @property integer $high_school_avarege
 * @property string $high_school_education_section
 * @property string $high_school_graduation_date
 *
 * The followings are the available model relations:
 * @property Student $std
 */
class Scholarship extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scholarship';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('recieving_date, scholarship_type, high_school_avarege, high_school_education_section, high_school_graduation_date', 'required'),
			array('std_id, high_school_avarege', 'numerical', 'integerOnly'=>true),
			array('scholarship_type, high_school_education_section', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, std_id, recieving_date, scholarship_type, high_school_avarege, high_school_education_section, high_school_graduation_date', 'safe', 'on'=>'search'),
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
			'std' => array(self::BELONGS_TO, 'Student', 'std_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'std_id' => 'Std',
			'recieving_date' => 'Recieving Date',
			'scholarship_type' => 'Scholarship Type',
			'high_school_avarege' => 'High School Avarege',
			'high_school_education_section' => 'High School Education Section',
			'high_school_graduation_date' => 'High School Graduation Date',
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
		$criteria->compare('std_id',$this->std_id);
		$criteria->compare('recieving_date',$this->recieving_date,true);
		$criteria->compare('scholarship_type',$this->scholarship_type,true);
		$criteria->compare('high_school_avarege',$this->high_school_avarege);
		$criteria->compare('high_school_education_section',$this->high_school_education_section,true);
		$criteria->compare('high_school_graduation_date',$this->high_school_graduation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scholarship the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
