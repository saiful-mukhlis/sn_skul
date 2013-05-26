<?php
$this->breadcrumbs=array(
	'Mapels',
);

$this->menu=array(
	array('label'=>'Create Mapel','url'=>array('create')),
	array('label'=>'Manage Mapel','url'=>array('admin')),
);
?>

<h1>Mapels</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
