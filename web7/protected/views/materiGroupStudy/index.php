<?php
$this->breadcrumbs=array(
	'Materi Group Studies',
);

$this->menu=array(
	array('label'=>'Create MateriGroupStudy','url'=>array('create')),
	array('label'=>'Manage MateriGroupStudy','url'=>array('admin')),
);
?>

<h1>Materi Group Studies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
