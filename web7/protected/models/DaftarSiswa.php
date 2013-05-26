<?php
class DaftarSiswa extends CFormModel {
	public $nama;
	public $email;
	public $password;
	public function rules() {
		return array (
				array (
						'nama, email, password',
						'required' 
				),
				array (
						'email',
						'email' 
				) 
		);
	}
}