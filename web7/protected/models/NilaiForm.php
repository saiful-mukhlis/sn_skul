<?php
class NilaiForm extends CFormModel {
	public $nilai;
	public function rules() {
		return array (
				array (
						'nilai',
						'required' 
				) ,
				array('nilai', 'numerical', 'integerOnly'=>true),
		);
	}
}