<?php
$this->breadcrumbs=array(
	'Jawabs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jawab','url'=>array('index')),
	array('label'=>'Create Jawab','url'=>array('create')),
	array('label'=>'View Jawab','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Jawab','url'=>array('admin')),
);
?>

<h1>Update Jawab <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>