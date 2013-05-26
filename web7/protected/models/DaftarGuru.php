<?php
class DaftarGuru extends CFormModel {
	public $nama;
	public $email;
	public $password;
	public $code;
	public function rules() {
		return array (
				array (
						'nama, email, password, code',
						'required' 
				),
				array (
						'email',
						'email' 
				),
				array (
						'email',
						'emailuniq' 
				),
				array (
						'code',
						'codeuniq' 
				) 
		);
	}
	public function attributeLabels() {
		return array (
				'code' => 'Code Ruangan',
				'nama' => 'Nama Guru' 
		);
	}
	public function emailuniq($attribute, $params) {
		if (! $this->hasErrors ()) {
			$count = Usr::model ()->count ( array (
					'condition' => 'username=:username OR email=:email',
					'params' => array (
							':username' => $this->email,
							':email' => $this->email 
					) 
			) );
			if ($count > 0) {
				$this->addError ( 'email', 'Email already exists.' );
			}
		}
	}
	public function codeuniq($attribute, $params) {
		if (! $this->hasErrors ()) {
			$count = Mapel::model ()->count ( array (
					'condition' => 'code=:code',
					'params' => array (
							':code' => strtoupper($this->code) 
					) 
			) );
			if ($count > 0) {
				$this->addError ( 'code', 'Code ruangan already exists.' );
			}
		}
	}
}