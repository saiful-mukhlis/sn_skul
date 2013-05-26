<?php
$this->breadcrumbs=array(
	'Respons',
);

$this->menu=array(
	array('label'=>'Create Respon','url'=>array('create')),
	array('label'=>'Manage Respon','url'=>array('admin')),
);
?>

<h1>Respons</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
