<?php
$this->breadcrumbs=array(
	'Materi Group Studies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MateriGroupStudy','url'=>array('index')),
	array('label'=>'Create MateriGroupStudy','url'=>array('create')),
	array('label'=>'Update MateriGroupStudy','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MateriGroupStudy','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MateriGroupStudy','url'=>array('admin')),
);
?>

<h1>View MateriGroupStudy #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'materiid',
		'groupid',
	),
)); ?>
