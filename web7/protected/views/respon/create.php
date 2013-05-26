<?php
$this->breadcrumbs=array(
	'Respons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Respon','url'=>array('index')),
	array('label'=>'Manage Respon','url'=>array('admin')),
);
?>

<h1>Create Respon</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>