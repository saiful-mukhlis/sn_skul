<?php
$this->breadcrumbs=array(
	'Materi Usrs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MateriUsr','url'=>array('index')),
	array('label'=>'Manage MateriUsr','url'=>array('admin')),
);
?>

<h1>Create MateriUsr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>