<?php

/**
 * This is the model class for table "nilai".
 *
 * The followings are the available columns in table 'nilai':
 * @property integer $id
 * @property integer $soalid
 * @property integer $usrid
 * @property integer $nilai
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Usr $usr
 * @property Soal $soal
 */
class Nilai extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nilai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('soalid, usrid', 'required'),
			array('soalid, usrid, nilai, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, soalid, usrid, nilai, status', 'safe', 'on'=>'search'),
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
			'usr' => array(self::BELONGS_TO, 'Usr', 'usrid'),
			'soal' => array(self::BELONGS_TO, 'Soal', 'soalid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'soalid' => 'Soalid',
			'usrid' => 'Usrid',
			'nilai' => 'Nilai',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('soalid',$this->soalid);
		$criteria->compare('usrid',$this->usrid);
		$criteria->compare('nilai',$this->nilai);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}