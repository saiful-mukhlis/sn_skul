<?php
$this->breadcrumbs=array(
	'Jawabs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jawab','url'=>array('index')),
	array('label'=>'Manage Jawab','url'=>array('admin')),
);
?>

<h1>Create Jawab</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>