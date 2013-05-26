<?php
$this->breadcrumbs=array(
	'Group Studies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupStudy','url'=>array('index')),
	array('label'=>'Manage GroupStudy','url'=>array('admin')),
);
?>

<h1>Create GroupStudy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>