<?php
$this->breadcrumbs=array(
	'Walls',
);

$this->menu=array(
	array('label'=>'Create Wall','url'=>array('create')),
	array('label'=>'Manage Wall','url'=>array('admin')),
);
?>

<h1>Walls</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
