<?php
$this->breadcrumbs=array(
	'Materi Group Studies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MateriGroupStudy','url'=>array('index')),
	array('label'=>'Manage MateriGroupStudy','url'=>array('admin')),
);
?>

<h1>Create MateriGroupStudy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>