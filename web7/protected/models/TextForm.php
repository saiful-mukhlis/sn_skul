<?php
class TextForm extends CFormModel {
	public $title;
	public $isi;
	public function rules() {
		return array (
				array (
						'isi',
						'required' 
				) ,
				array (
						'title',
						'length',
						'max' => 255
				)
		);
	}
}