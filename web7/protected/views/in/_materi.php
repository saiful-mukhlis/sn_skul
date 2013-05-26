<div class="span12">
<h5><span class="badge badge-info"><?php echo $index+1;?></span>  <?php echo $data->title;?>  

<?php echo CHtml::link('<i class="icon-eye-open"></i>',array('datamateri/lihat','id'=>$data->id),array('class'=>'btn btn-mini', 'target'=>'_blank','data-toggle'=>'tooltip','title'=>'Lihat Materi'))?>   
<?php 
if (Yii::app()->user->getState('status')==1) {
?>
<?php echo CHtml::link('<i class="icon-pencil"></i>',array('in/edit-materi','id'=>$data->id),array('class'=>'btn btn-mini','data-toggle'=>'tooltip','title'=>'Edit Materi'))?>   
<?php echo CHtml::link('<i class="icon-remove-sign"></i>','#',array('class'=>'btn btn-mini','data-toggle'=>'tooltip','title'=>'Hapus Materi', "submit"=>array('in/delete-materi', 'id'=>$data->id), 'confirm' => 'Are you sure delete this item?'))?>
<?php 
}
?>
</h5> 
<hr/>
</div>



