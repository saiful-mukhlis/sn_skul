<?php
$this->breadcrumbs=array(
	'Jawabs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Jawab','url'=>array('index')),
	array('label'=>'Create Jawab','url'=>array('create')),
	array('label'=>'Update Jawab','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Jawab','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jawab','url'=>array('admin')),
);
?>

<h1>View Jawab #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'soalid',
		'usrid',
		'isi',
		'status',
	),
)); ?>
