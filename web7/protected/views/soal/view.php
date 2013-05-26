<?php
$this->breadcrumbs=array(
	'Soals'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Soal','url'=>array('index')),
	array('label'=>'Create Soal','url'=>array('create')),
	array('label'=>'Update Soal','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Soal','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Soal','url'=>array('admin')),
);
?>

<h1>View Soal #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mapelid',
		'title',
		'isi',
		'status',
	),
)); ?>
