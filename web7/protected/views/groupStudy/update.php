<?php
$this->breadcrumbs=array(
	'Group Studies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupStudy','url'=>array('index')),
	array('label'=>'Create GroupStudy','url'=>array('create')),
	array('label'=>'View GroupStudy','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage GroupStudy','url'=>array('admin')),
);
?>

<h1>Update GroupStudy <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>