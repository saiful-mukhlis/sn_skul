<?php 
$rs=Respon::model()->findAllByAttributes(array('wallid'=>$w->id));
foreach ($rs as $v) {
	echo '<div class="span12"></div>';
	echo '<div class="span3">'.CHtml::image(H::getAvatar($v->usrid)).'</div>';
	echo '</div>';
	echo '<div class="span8">'.$v->isi.'</div>';
	echo '</div>';
	echo '</div>';
}
?>