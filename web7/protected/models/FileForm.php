<?php
class FileForm extends CFormModel {
	public $title;
	public $file;
	public function rules() {
		return array (
				array (
						'title',
						'required' 
				) ,
				array('file', 'file', 'types'=>'doc,docx,pdf'),
		);
	}
	

}