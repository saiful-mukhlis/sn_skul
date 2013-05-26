<?php
class BmbNav extends CWidget {
	public $count=9;
	public function init() {
	}
	public function run() {
		echo CHtml::openTag('div', array('class'=>'navbar navbar-inverse navp'));
		echo CHtml::openTag('div', array('class'=>'navbar-inner'));
		echo CHtml::openTag('div', array('class'=>'container'));
		
		echo '<a class="btn btn-navbar" data-toggle="collapse"	data-target=".nav-collapse"> <span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span></a>';
		
		echo CHtml::openTag('div', array('class'=>'nav-collapse collapse'));
		
		echo '<ul class="nav">';
		
		$nav1s=Nav::model()->findAll();
		foreach ($nav1s as $v) {
			$nav2s=Navc::model()->findAllByAttributes(array('navid'=>$v->id));
			if ($nav2s==null) {
				echo '<li><a href="'.Yii::app()->baseUrl.'/'.rawurlencode($v->url).'">'.CHtml::encode($v->name).'</a></li>';
			}else{
				
					echo '<li class="dropdown"><a href="'.Yii::app()->baseUrl.'/'.rawurlencode($v->url).'" class="dropdown-toggle"	data-toggle="dropdown">'.CHtml::encode($v->name).'<b class="caret"></b></a>';
					$count = count($nav2s);
					$lebar=ceil($count/$count);
					if ($lebar>1){
						echo '<ul class="dropdown-menu row-fluid"  style="min-width: '.(165*$lebar).'px;">';
					}else{
						echo '<ul class="dropdown-menu">';
					}
					
					if ($lebar>1){
						$i=0;
						foreach ($nav2s as $v2) {
							if ($i==0){
								echo '<div class="span4" style="min-width: 160px;">';
							}
							echo '<li><a href="'.Yii::app()->baseUrl.'/'.$v2->url.'">'.$v2->name.'</a></li>';
							if ($i==($count-1)) {
								echo '</div>';
							}
							$i++;
							if ($i==$count) {
								$i=0;
							}
						}
						if ($i!=0) {
							echo '</div>';
						}
					}else{
						foreach ($nav2s as $v2) {
							echo  '<li><a href="'.Yii::app()->baseUrl.'/'.$v2->url.'">'.$v2->name.'</a></li>';
						}
					}
					
					echo '</ul>';
				
			}
		}
		
		echo '</ul>';
		
		
		echo '<p class="navbar-text pull-right"> <a href="#" class="navbar-link">Shipment</a> </p>';
		echo '<p class="navbar-text pull-right"> <a href="#" class="navbar-link">Pay</a> </p>';
		echo '<p class="navbar-text pull-right"> <a href="#" class="navbar-link">Order</a> </p>';
		
		
		echo CHtml::closeTag('div');
		echo CHtml::closeTag('div');
		echo CHtml::closeTag('div');
		echo CHtml::closeTag('div');
	}
}
