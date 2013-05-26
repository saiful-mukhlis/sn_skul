<?php

/**
 * This is the model class for table "usr".
 *
 * The followings are the available columns in table 'usr':
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $notelp
 * @property string $alamat
 * @property integer $jenis_kelamin
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property GroupStudy[] $groupStudies
 * @property Mapel[] $mapels
 * @property MateriUsr[] $materiUsrs
 * @property Wall[] $walls
 */
class Usr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usr the static model class
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
		return 'usr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, username, password, email', 'required'),
			array('jenis_kelamin, status', 'numerical', 'integerOnly'=>true),
			array('nama, username, password, email, notelp, alamat', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, username, password, email, notelp, alamat, jenis_kelamin, status', 'safe', 'on'=>'search'),
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
			'groupStudies' => array(self::HAS_MANY, 'GroupStudy', 'usrid'),
			'mapels' => array(self::HAS_MANY, 'Mapel', 'usrid'),
			'materiUsrs' => array(self::HAS_MANY, 'MateriUsr', 'usrid'),
			'walls' => array(self::HAS_MANY, 'Wall', 'usrid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'notelp' => 'Notelp',
			'alamat' => 'Alamat',
			'jenis_kelamin' => 'Jenis Kelamin',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('notelp',$this->notelp,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getArrayJenisKelamin(){
		return array(1=>'Pilih Jenis Kelamin',2=>'Pria',3=>'Perempuan');
	}
}