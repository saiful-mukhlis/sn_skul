<?php
class Page extends CModel {
	public $u;
	public $m;
	public $avatar;
	public function __construct() {
	}
	public function attributeNames() {
		return array_keys ( $this->getMetaData ()->columns );
	}
}