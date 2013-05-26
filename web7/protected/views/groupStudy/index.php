<?php
$this->breadcrumbs=array(
	'Group Studies',
);

$this->menu=array(
	array('label'=>'Create GroupStudy','url'=>array('create')),
	array('label'=>'Manage GroupStudy','url'=>array('admin')),
);
?>

<h1>Group Studies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
