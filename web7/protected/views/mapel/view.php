<?php
$this->breadcrumbs=array(
	'Mapels'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Mapel','url'=>array('index')),
	array('label'=>'Create Mapel','url'=>array('create')),
	array('label'=>'Update Mapel','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Mapel','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mapel','url'=>array('admin')),
);
?>

<h1>View Mapel #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usrid',
		'code',
		'name',
		'created',
		'updated',
		'status',
	),
)); ?>
