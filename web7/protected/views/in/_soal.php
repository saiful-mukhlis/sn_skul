<div class="span11" style="margin-left: 2px;">
<h5><span class="badge badge-info"><?php echo $index+1;?></span>  <?php echo $data->title;?>  

<?php echo CHtml::link('<i class="icon-eye-open"></i>',array('datasoal/lihat','id'=>$data->id),array('class'=>'btn btn-mini', 'target'=>'_blank','data-toggle'=>'tooltip','title'=>'Lihat Soal'))?>   
<?php 
if (Yii::app()->user->getState('status')==1) {
?>
<?php echo CHtml::link('<i class="icon-pencil"></i>',array('in/edit-soal','id'=>$data->id),array('class'=>'btn btn-mini','data-toggle'=>'tooltip','title'=>'Edit Soal'))?>   
<?php echo CHtml::link('<i class="icon-remove-sign"></i>','#',array('class'=>'btn btn-mini','data-toggle'=>'tooltip','title'=>'Hapus Soal', "submit"=>array('in/delete-soal', 'id'=>$data->id), 'confirm' => 'Are you sure delete this item?'))?>
<?php 
}else if (Yii::app()->user->getState('status')==2) {
?>
<?php 
if ($data->status==1) {
	echo CHtml::link('<i class="icon-book"></i>',array('in/jawab-soal','id'=>$data->id),array('class'=>'btn btn-mini','data-toggle'=>'tooltip','title'=>'Jawab Soal'));
}else{
	//nilai
	$idUsr=Yii::app()->user->getState('id');
	$nilai=Nilai::model()->findByAttributes(array('usrid'=>$idUsr, 'soalid'=>$data->id));
	if ($nilai!=null) {
		echo '<span class="label label-info">Nilai '.$nilai->nilai.'</span>';
	}
}
?>   
<?php 
}
?>
</h5> 
<hr/>
</div>