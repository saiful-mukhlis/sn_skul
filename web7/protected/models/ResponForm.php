<?php
class ResponForm extends CFormModel {
	public $wallid;
	public $isi;
	public function rules() {
		return array (
				array (
						'isi, wallid',
						'required' 
				) ,
				array (
						'isi',
						'length',
						'max' => 255
				)
		)
		;
	}
	public function attributeLabels() {
		return array (
				'isi' => 'Your comment'
		);
	}
}