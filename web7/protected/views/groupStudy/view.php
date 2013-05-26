<?php
$this->breadcrumbs=array(
	'Group Studies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GroupStudy','url'=>array('index')),
	array('label'=>'Create GroupStudy','url'=>array('create')),
	array('label'=>'Update GroupStudy','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete GroupStudy','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupStudy','url'=>array('admin')),
);
?>

<h1>View GroupStudy #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usrid',
		'mapelid',
		'status',
	),
)); ?>
