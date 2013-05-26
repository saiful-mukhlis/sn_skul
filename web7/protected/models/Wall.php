<?php

/**
 * This is the model class for table "wall".
 *
 * The followings are the available columns in table 'wall':
 * @property integer $id
 * @property integer $usrid
 * @property integer $mapelid
 * @property string $isi
 * @property string $created
 * @property string $updated
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Respon[] $respons
 * @property Mapel $mapel
 * @property Usr $usr
 */
class Wall extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wall the static model class
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
		return 'wall';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usrid, mapelid, isi', 'required'),
			array('usrid, mapelid, status', 'numerical', 'integerOnly'=>true),
			array('isi', 'length', 'max'=>255),
			array('created, updated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usrid, mapelid, isi, created, updated, status', 'safe', 'on'=>'search'),
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
			'respons' => array(self::HAS_MANY, 'Respon', 'wallid'),
			'mapel' => array(self::BELONGS_TO, 'Mapel', 'mapelid'),
			'usr' => array(self::BELONGS_TO, 'Usr', 'usrid'),
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
			'isi' => 'Isi',
			'created' => 'Created',
			'updated' => 'Updated',
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
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this->with(array('usr','mapel')), array(
			'criteria'=>$criteria,
		));
	}
}