<?php
$this->breadcrumbs=array(
	'Soals'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Soal','url'=>array('index')),
	array('label'=>'Create Soal','url'=>array('create')),
	array('label'=>'View Soal','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Soal','url'=>array('admin')),
);
?>

<h1>Update Soal <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>