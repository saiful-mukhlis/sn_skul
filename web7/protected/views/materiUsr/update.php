<?php
$this->breadcrumbs=array(
	'Materi Usrs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MateriUsr','url'=>array('index')),
	array('label'=>'Create MateriUsr','url'=>array('create')),
	array('label'=>'View MateriUsr','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MateriUsr','url'=>array('admin')),
);
?>

<h1>Update MateriUsr <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>