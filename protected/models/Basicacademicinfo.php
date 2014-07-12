<?php

/**
 * This is the model class for table "basicacademicinfo".
 *
 * The followings are the available columns in table 'basicacademicinfo':
 * @property integer $std_id
 * @property integer $uni_id
 * @property string $maj_name
 * @property string $registration_date
 * @property integer $student_university_no
 *
 * The followings are the available model relations:
 * @property Major $majName
 * @property Student $std
 * @property University $uni
 */
class Basicacademicinfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'basicacademicinfo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('registration_date', 'required'),
			array('std_id, uni_id, student_university_no', 'numerical', 'integerOnly'=>true),
			array('maj_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('std_id, uni_id, maj_name, registration_date, student_university_no', 'safe', 'on'=>'search'),
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
			'majName' => array(self::BELONGS_TO, 'Major', 'maj_name'),
			'std' => array(self::BELONGS_TO, 'Student', 'std_id'),
			'uni' => array(self::BELONGS_TO, 'University', 'uni_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'std_id' => 'Std',
			'uni_id' => 'Uni',
			'maj_name' => 'Maj Name',
			'registration_date' => 'Registration Date',
			'student_university_no' => 'Student University No',
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

		$criteria->compare('std_id',$this->std_id);
		$criteria->compare('uni_id',$this->uni_id);
		$criteria->compare('maj_name',$this->maj_name,true);
		$criteria->compare('registration_date',$this->registration_date,true);
		$criteria->compare('student_university_no',$this->student_university_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Basicacademicinfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
