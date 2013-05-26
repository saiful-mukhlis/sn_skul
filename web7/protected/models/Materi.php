<?php

/**
 * This is the model class for table "materi".
 *
 * The followings are the available columns in table 'materi':
 * @property integer $id
 * @property integer $mapelid
 * @property string $title
 * @property string $isi
 *
 * The followings are the available model relations:
 * @property Mapel $mapel
 * @property MateriGroupStudy[] $materiGroupStudies
 * @property MateriUsr[] $materiUsrs
 */
class Materi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Materi the static model class
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
		return 'materi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mapelid, title, isi', 'required'),
			array('mapelid', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, mapelid, title, isi', 'safe', 'on'=>'search'),
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
			'mapel' => array(self::BELONGS_TO, 'Mapel', 'mapelid'),
			'materiGroupStudies' => array(self::HAS_MANY, 'MateriGroupStudy', 'materiid'),
			'materiUsrs' => array(self::HAS_MANY, 'MateriUsr', 'materiid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mapelid' => 'Mapelid',
			'title' => 'Title',
			'isi' => 'Isi',
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
		$criteria->compare('mapelid',$this->mapelid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('isi',$this->isi,true);

		return new CActiveDataProvider($this->with('mapel'), array(
			'criteria'=>$criteria,
		));
	}
}