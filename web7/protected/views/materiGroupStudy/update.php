<?php
$this->breadcrumbs=array(
	'Materi Group Studies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MateriGroupStudy','url'=>array('index')),
	array('label'=>'Create MateriGroupStudy','url'=>array('create')),
	array('label'=>'View MateriGroupStudy','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MateriGroupStudy','url'=>array('admin')),
);
?>

<h1>Update MateriGroupStudy <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>