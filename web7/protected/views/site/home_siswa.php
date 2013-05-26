<div class="container-fluid content mt50">
	<div class="row-fluid">
		<div class="span12">
				</div>
	</div>
</div>
<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12">
<?php 
// start
?>		
			<div class="span4">
			<div class="span12"><h3><?php echo $u->nama; ?> 
			<?php echo CHtml::link('<i class="icon-pencil"></i>',array('profile/change'),array('class'=>'btn btn-mini'))?>
			<?php echo CHtml::link('<i class="icon-lock"></i>',array('profile/change-password'),array('class'=>'btn btn-mini'))?>
			<?php echo CHtml::link('<i class="icon-picture"></i>',array('profile/change-avatar'),array('class'=>'btn btn-mini'))?>
			</h3></div>
			<div class="span12 imgprofile"><?php echo CHtml::image($this->page->avatar); ?></div>
			<div class="span12"><?php echo $this->renderPartial('profile'); ?></div>
			</div>
<div class="span8">
<div class="span12"><h3>Kelas yang Anda Ikuti  
<?php echo CHtml::link('<i class="icon-plus"></i>',array('in/ikut'),array('class'=>'btn btn-mini'))?>
</h3></div>
<div class="span12">
<?php
foreach ($gs as $v) {
echo '<div class="span3">';
$tmp=Yii:: app()-> baseUrl.'/img/classroom.png';
if (file_exists (Yii::app()->getBasePath().'/../foto/kavatar/'.md5($v->mapel->id).'.jpg')) {
	$tmp=Yii::app()->baseUrl.'/foto/kavatar/'.md5($v->mapel->id).'.jpg';
}
echo '<div class="span12 imgmapel">'.CHtml::image($tmp).'</div>';
echo '<div class="span12 mt10"><span class="label label-info">Kode Room : '.strtolower($v->mapel->code).'</span></div>';
echo '<div class="span12"><h4>'.ucfirst($v->mapel->name).'</h4></div>';
echo '<div class="span12 tar">'.CHtml::link('Masuk', array('in/room','id'=>$v->mapel->id), array('class'=>'btn btn-mini btn-danger')).'</div>';
echo '</div>';

}	
?>
</div>
</div>		
<?php 
// end
?>			
		</div>

	</div>
</div>