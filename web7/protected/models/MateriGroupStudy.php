<?php

/**
 * This is the model class for table "materi_group_study".
 *
 * The followings are the available columns in table 'materi_group_study':
 * @property integer $id
 * @property integer $materiid
 * @property integer $groupid
 *
 * The followings are the available model relations:
 * @property Materi $materi
 * @property GroupStudy $group
 */
class MateriGroupStudy extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MateriGroupStudy the static model class
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
		return 'materi_group_study';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('materiid, groupid', 'required'),
			array('materiid, groupid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, materiid, groupid', 'safe', 'on'=>'search'),
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
			'materi' => array(self::BELONGS_TO, 'Materi', 'materiid'),
			'group' => array(self::BELONGS_TO, 'GroupStudy', 'groupid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'materiid' => 'Materiid',
			'groupid' => 'Groupid',
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
		$criteria->compare('materiid',$this->materiid);
		$criteria->compare('groupid',$this->groupid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}