<?php
$this->breadcrumbs=array(
	'Materi Usrs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MateriUsr','url'=>array('index')),
	array('label'=>'Create MateriUsr','url'=>array('create')),
	array('label'=>'Update MateriUsr','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MateriUsr','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MateriUsr','url'=>array('admin')),
);
?>

<h1>View MateriUsr #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'materiid',
		'usrid',
	),
)); ?>
