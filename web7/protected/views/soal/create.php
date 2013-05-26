<?php
$this->breadcrumbs=array(
	'Soals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Soal','url'=>array('index')),
	array('label'=>'Manage Soal','url'=>array('admin')),
);
?>

<h1>Create Soal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>