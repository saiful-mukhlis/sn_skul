<?php
$this->breadcrumbs=array(
	'Materis',
);

$this->menu=array(
	array('label'=>'Create Materi','url'=>array('create')),
	array('label'=>'Manage Materi','url'=>array('admin')),
);
?>

<h1>Materis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
