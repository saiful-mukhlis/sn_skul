<?php
$this->breadcrumbs=array(
	'Materis'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Materi','url'=>array('index')),
	array('label'=>'Create Materi','url'=>array('create')),
	array('label'=>'Update Materi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Materi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materi','url'=>array('admin')),
);
?>

<h1>View Materi #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mapelid',
		'title',
		'isi',
	),
)); ?>
