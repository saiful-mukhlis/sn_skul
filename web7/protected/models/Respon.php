<?php

/**
 * This is the model class for table "respon".
 *
 * The followings are the available columns in table 'respon':
 * @property integer $id
 * @property integer $wallid
 * @property integer $usrid
 * @property string $isi
 * @property string $created
 * @property string $updated
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Usr $usr
 * @property Wall $wall
 */
class Respon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Respon the static model class
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
		return 'respon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('wallid, usrid, isi', 'required'),
			array('wallid, usrid, status', 'numerical', 'integerOnly'=>true),
			array('isi', 'length', 'max'=>255),
			array('created, updated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, wallid, usrid, isi, created, updated, status', 'safe', 'on'=>'search'),
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
			'wall' => array(self::BELONGS_TO, 'Wall', 'wallid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'wallid' => 'Wallid',
			'usrid' => 'Usrid',
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
		$criteria->compare('wallid',$this->wallid);
		$criteria->compare('usrid',$this->usrid);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this->with(array('wall','usr')), array(
			'criteria'=>$criteria,
		));
	}
}