<?php
$this->breadcrumbs=array(
	'Materis'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materi','url'=>array('index')),
	array('label'=>'Create Materi','url'=>array('create')),
	array('label'=>'View Materi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Materi','url'=>array('admin')),
);
?>

<h1>Update Materi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>