<?php

$this->menu=array(
	array('label'=>'User','url'=>array('admin')),
);
?>

<h4>Usrs</h4>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
