<?php
$this->breadcrumbs=array(
	'Respons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Respon','url'=>array('index')),
	array('label'=>'Create Respon','url'=>array('create')),
	array('label'=>'View Respon','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Respon','url'=>array('admin')),
);
?>

<h1>Update Respon <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>