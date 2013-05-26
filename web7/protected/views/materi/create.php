<?php
$this->breadcrumbs=array(
	'Materis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Materi','url'=>array('index')),
	array('label'=>'Manage Materi','url'=>array('admin')),
);
?>

<h1>Create Materi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>