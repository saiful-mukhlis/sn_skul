<?php
class UserIdentity extends CUserIdentity {
	public function authenticate() {
		$u1 = Usr::model ()->findByAttributes ( array (
				'username' => $this->username 
		) );
		if ($u1 == null) {
			$u1 = Usr::model ()->findByAttributes ( array (
					'email' => $this->username 
			) );
		}
		
		if ($u1 == null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if ($u1->password !== md5 ( $this->password ))
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->errorCode = self::ERROR_NONE;
			// $this->_id=$u1->ID;
			$this->setState ( 'nama', $u1->nama );
			$this->setState ( 'id', $u1->id );
			$this->setState ( 'status', $u1->status );
		}
		return ! $this->errorCode;
	}
	

}