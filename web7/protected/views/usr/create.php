<?php
$this->breadcrumbs=array(
	'Usrs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usr','url'=>array('index')),
	array('label'=>'Manage Usr','url'=>array('admin')),
);
?>

<h1>Create Usr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>