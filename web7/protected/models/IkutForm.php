<?php

class IkutForm extends CFormModel
{
	public $code;

	public function rules()
	{
		return array(
			array('code', 'required'),
			array('code', 'ckcode'),
		);
	}


	public function ckcode($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$c=Mapel::model()->countByAttributes(array('code'=>strtoupper($this->code)));
			if ($c==0) {
				$this->addError($attribute,'"'.$this->code.'" tidak terdaftar.');
			}
		}
	}

}
