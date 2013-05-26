<?php
class Controller extends CController {
	public $layout = '//layouts/main';
	public $menu = array ();
	public $breadcrumbs = array ();
	public $title, $description, $keywords;
	public $page;
	public function __construct($id,$module=null)
	{
		parent::__construct($id,$module);
		$this->page=new Page();
	}
	public function getIdUser(){
		$id=Yii::app()->user->getState('id');
		if ($id==null) {
			$this->redirect(array('site/logout'));
		}
		return $id;
	}
	public function setPrevillage($status=1){
		$id=Yii::app()->user->getState('status');
		if ($id!=$status) {
			$this->redirect(array('site/index'));
		}
	}
}