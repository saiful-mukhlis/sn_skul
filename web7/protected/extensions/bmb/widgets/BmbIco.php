<?php
class BmbIco extends CWidget {
	public $urlIco='/favicon.ico';
	public function init() {
	}
	public function run() {
		echo '<link rel="shortcut icon"	href="'.Yii::app()->request->baseUrl.$this->urlIco.'"	type="image/x-icon" />';
	}
}
