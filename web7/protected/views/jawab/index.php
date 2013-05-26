<?php
$this->breadcrumbs=array(
	'Jawabs',
);

$this->menu=array(
	array('label'=>'Create Jawab','url'=>array('create')),
	array('label'=>'Manage Jawab','url'=>array('admin')),
);
?>

<h1>Jawabs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
