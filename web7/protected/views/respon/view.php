<?php
$this->breadcrumbs=array(
	'Respons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Respon','url'=>array('index')),
	array('label'=>'Create Respon','url'=>array('create')),
	array('label'=>'Update Respon','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Respon','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Respon','url'=>array('admin')),
);
?>

<h1>View Respon #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'wallid',
		'usrid',
		'isi',
		'created',
		'updated',
		'status',
	),
)); ?>
