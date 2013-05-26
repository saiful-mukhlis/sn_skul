<?php
class BmbIE extends CWidget {
	public function init() {
	}
	public function run() {
		echo '<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->';
		echo '<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->';
		echo '<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->';
		echo '<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->';
	}
}
