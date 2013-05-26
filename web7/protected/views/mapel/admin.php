<?php
$this->menu=array(
	array('label'=>'Kelas Room','url'=>array('admin')),
);

?>
<h4>Kelas Room</h4>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mapel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                               'name'=>'id' ,
                               'htmlOptions'=>array ('width' =>'40px'),
                  ),
			
		//'usrid',
		'code',
		'name',
		//'created',
		//'updated',
		/*
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
