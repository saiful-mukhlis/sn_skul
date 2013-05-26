<?php

$this->menu=array(
	array('label'=>'Create Wall','url'=>array('create')),
	array('label'=>'Update Wall','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Wall','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Wall','url'=>array('admin')),
);
?>

<h1>View Wall #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usrid',
		'mapelid',
		'isi',
		'created',
		//'updated',
		//'status',
	),
)); ?>
