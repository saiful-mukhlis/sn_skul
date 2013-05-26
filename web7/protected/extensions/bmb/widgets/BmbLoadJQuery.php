<?php
class BmbLoadJQuery extends CWidget {
	public function init() {
	}
	public function run() {
		echo CHtml::scriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
		echo CHtml::script('window.jQuery || document.write(\'<script src="'.Yii::app()->request->baseUrl.'/js/libs/jquery-1.7.1.min.js"><\/script>\')');
	}
}
