	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />
<?php 
echo CHtml::link('Tambah '.$data->name, array('site/siswa-select-mapel/'.$data->id));
?>	