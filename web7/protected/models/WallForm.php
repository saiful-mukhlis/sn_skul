<?php
class WallForm extends CFormModel {
	public $isi;
	public function rules() {
		return array (
				array (
						'isi',
						'required' 
				),
				array (
						'isi',
						'length',
						'max' => 255 
				) 
		);
	}
	public function attributeLabels() {
		return array (
				'isi' => 'Your mind' 
		);
	}
}