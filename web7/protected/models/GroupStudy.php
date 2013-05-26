<?php

/**
 * This is the model class for table "group_study".
 *
 * The followings are the available columns in table 'group_study':
 * @property integer $id
 * @property integer $usrid
 * @property integer $mapelid
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Usr $usr
 * @property Mapel $mapel
 * @property MateriGroupStudy[] $materiGroupStudies
 */
class GroupStudy extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GroupStudy the static model class
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
		return 'group_study';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usrid, mapelid', 'required'),
			array('usrid, mapelid, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usrid, mapelid, status', 'safe', 'on'=>'search'),
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
			'mapel' => array(self::BELONGS_TO, 'Mapel', 'mapelid'),
			'materiGroupStudies' => array(self::HAS_MANY, 'MateriGroupStudy', 'groupid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usrid' => 'Usrid',
			'mapelid' => 'Mapelid',
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
		$criteria->compare('usrid',$this->usrid);
		$criteria->compare('mapelid',$this->mapelid);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}