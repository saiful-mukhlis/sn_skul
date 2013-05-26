<?php
class BmbMeta extends CWidget {
	public $title;
	public $desc;
	public function init() {
	}
	public function run() {
		echo '<meta charset="utf-8">';
		echo CHtml::metaTag ( $this->desc, 'description' ) . CHtml::metaTag ( 'width=device-width', 'viewport' );
		echo CHtml::openTag ( 'title' ) . CHtml::encode ( $this->title ) . CHtml::closeTag ( 'title' );
	}
}
