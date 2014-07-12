<?php

/**
 * This is the model class for table "{{training_cv}}".
 *
 * The followings are the available columns in table '{{training_cv}}':
 * @property integer $Default_ID
 * @property integer $Users_ID
 * @property string $Doc_File
 * @property string $Doc_Type
 * @property string $Doc_Size
 * @property string $Up_date
 * @property string $Doc_isNew
 *
 * The followings are the available model relations:
 * @property Users $users
 */
class TrainingCv extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{training_cv}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Users_ID ,Doc_File', 'required'),
			array('Users_ID', 'numerical', 'integerOnly'=>true),
			array('Doc_Type, Doc_Size', 'length', 'max'=>100),
                        array('Doc_File', 'file', 'types' => 'pdf, doc, docx, zip', 'allowEmpty' => true,
                        'maxSize' => 1024 * 1024 * 10, 'tooLarge' => 'The file was larger than 10MB. Please upload a smaller file.'),
			array('Up_date, Doc_File', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Default_ID, Users_ID, Doc_File, Doc_Type, Doc_Size, Up_date', 'safe', 'on'=>'search'),
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
			'users' => array(self::BELONGS_TO, 'Users', 'Users_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Default_ID' => 'Default',
			'Users_ID' => 'Users',
			'Doc_File' => 'Doc File',
			'Doc_Type' => 'Doc Type',
			'Doc_Size' => 'Doc Size',
			'Up_date' => 'Up Date',
			'Doc_isNew' => 'Doc Is New',
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

		$criteria->compare('Default_ID',$this->Default_ID);
		$criteria->compare('Users_ID',$this->Users_ID);
		$criteria->compare('Doc_File',$this->Doc_File,true);
		$criteria->compare('Doc_Type',$this->Doc_Type,true);
		$criteria->compare('Doc_Size',$this->Doc_Size,true);
		$criteria->compare('Up_date',$this->Up_date,true);
		$criteria->compare('Doc_isNew',$this->Doc_isNew,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TrainingCv the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
