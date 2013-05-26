<?php
$this->breadcrumbs=array(
	'Mapels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mapel','url'=>array('index')),
	array('label'=>'Manage Mapel','url'=>array('admin')),
);
?>

<h1>Create Mapel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>