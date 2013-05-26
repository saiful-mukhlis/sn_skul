<?php
class EProjekktor extends CWidget {
	
	public function init()
	{

	}

	public function run()
	{
		$this->registerScripts();
	}

	protected function registerScripts()
	{
		$cs = Yii::app()->clientScript;

		$basePath = dirname(__FILE__) . DIRECTORY_SEPARATOR .
			'assets' . DIRECTORY_SEPARATOR;

		$baseUrl = Yii::app()->getAssetManager()->publish($basePath, false, 1);

		$cs->registerCssFile($baseUrl . '/theme/style.css');

		$cs = Yii::app()->clientScript;
		$cs->registerCoreScript('jquery');
		$cs->registerScriptFile($baseUrl . '/projekktor.min.js', CClientScript::POS_END);

		$cs->registerScript('video', "projekktor('video');", CClientScript::POS_READY);
	}

}