<?php
$this->breadcrumbs=array(
	'Materi Usrs',
);

$this->menu=array(
	array('label'=>'Create MateriUsr','url'=>array('create')),
	array('label'=>'Manage MateriUsr','url'=>array('admin')),
);
?>

<h1>Materi Usrs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
