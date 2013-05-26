<?php

class PasswordForm extends CFormModel
{
	public $passwordLama;
	public $passwordBaru;

	public function rules()
	{
		return array(
			// username and password are required
			array('passwordLama, passwordBaru', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('passwordLama', 'authenticate'),
		);
	}


	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$u=Usr::model()->findByPk(Yii::app()->user->getState('id'));
			if ($u==null || $u->password!==md5($this->passwordLama)){
				$this->addError('passwordLama','Incorrect your password.');
			}
		}
	}

}
