<div class="span12">
<h5><span class="badge badge-info"><?php echo $index+1;?></span>  <?php echo $data->title;?>  

<?php echo CHtml::link('<i class="icon-arrow-down"></i>',Yii::app()->baseUrl.$data->path,array('class'=>'btn btn-mini', 'target'=>'_blank','data-toggle'=>'tooltip','title'=>'Download'))?>   
<?php 
if (Yii::app()->user->getState('status')==1) {
?>
<?php echo CHtml::link('<i class="icon-remove-sign"></i>','#',array('class'=>'btn btn-mini','data-toggle'=>'tooltip','title'=>'Hapus File', "submit"=>array('in/delete-file', 'id'=>$data->id), 'confirm' => 'Are you sure delete this item?'))?>
<?php 
}
?>
</h5> 
<hr/>
</div>



