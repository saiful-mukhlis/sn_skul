<?php
class H
{
	public static function sitemap() {
	}
	public static function getAvatar($id){
		$a=Yii:: app()-> baseUrl.'/img/people128.png';
		if (file_exists (Yii::app()->getBasePath().'/../foto/avatar/'.md5($id).'.jpg')) {
			$a=Yii::app()->baseUrl.'/foto/avatar/'.md5($id).'.jpg';
		}
		return $a;
	}
	public static function getKAvatar($id){
		$a=Yii:: app()-> baseUrl.'/images/size/199x145/img/classroom.png';
		if (file_exists (Yii::app()->getBasePath().'/../foto/kavatar/'.md5($id).'.jpg')) {
			$a=Yii::app()->baseUrl.'/foto/kavatar/'.md5($id).'.jpg';
		}
		return $a;
	}
	public static function navx() {}
	public static function meta($title,$description,$keywords) {
		return '<meta charset="utf-8">'.
				'<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'.
				'<title>'.$title.'</title>'.
				'<meta name="description" content="'.$description.'">'.
				'<meta name="keywords" content="'.$keywords.'">'.
				'<meta name="language" content="id" />'.
				'<meta name="generator" content="WordPress 2.9.1"/>'.
				'<meta name="author" content="beembe"/>'.
				'<meta name="robots" content="index, follow"/>'.
				'<meta content="1 days" name="revisit-after"/>';
	}
	public static function link() {
		return CHtml::link(Yii::app()->baseUrl);
	}
	public static function ico($urlIco='favicon.ico') {
		return '<link rel="shortcut icon"	href="'.Yii::app()->request->baseUrl.'/'.$urlIco.'"	type="image/x-icon" />';
	}
	public static function ie() {
		return '<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->'.
				'<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->'.
				'<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->'.
				'<!--[if gt IE 8]><!--> <html class="no-js" lang="id"> <!--<![endif]-->';
	}
	public static function css()
	{
		$cs=Yii::app()->getClientScript();
		//$cs->scriptMap['jquery-ui.css'] = Yii::app()->baseUrl . '/css/bootstrap/css/jquery-ui-bootstrapx.css';
		//$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/jquery-ui-bootstrap.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap.css');
		$cs->registerMetaTag('width=device-width, initial-scale=1.0', 'viewport');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-responsive.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-yii.css');
		
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/jasny-bootstrap.min.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/jasny-bootstrap-responsive.min.css');
		
		
		//$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-yii.css');
		
		
		$cs->scriptMap=array(
				'jquery.js'=>false,
				'jquery-ui.min.js'=>false,
				'jquery-ui.css'=>false,
		);

		$cs->registerCssFile(Yii::app()->baseUrl.'/css/q-responsive.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/style.css');
		
		//$cs->registerCssFile(Yii::app()->baseUrl.'/css/flat-ui.css');

		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/bootstrap.bootbox.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/jqueryui.min.js', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/', CClientScript::POS_END);
		
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/jqueryui.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/jqueryui.min.js', CClientScript::POS_END);

		//$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.eislideshow.js', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.easing.1.3.js', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/js/custom_checkbox_and_radio.js', CClientScript::POS_END);
		
		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/jasny-bootstrap.min.js', CClientScript::POS_END);
	}
	



	public static function imageLink($srcImg,$text='', $alt='', $url='#')
	{
		return CHtml::link(CHtml::image(Yii::app()->baseUrl . $srcImg, $alt).$text, $url);
	}

	public static function nav($navs=array()){}
	public static function header(){}
    public static function footer(){
//     	return '<div id="footer">
//     <div class="container">
//         <p class="muted credit">
//             &copy; 2013 <span title="www.beembe.com">www.beembe.com</span>
//             Inc. All rights reserved.
//         </p>
//     </div>
// </div>';
    }

}
