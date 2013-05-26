<?php

$this->menu=array(
	array('label'=>'Respon','url'=>array('admin')),
);
?>

<h4>Respon</h4>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'respon-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                               'name'=>'id' ,
                               'htmlOptions'=>array ('width' =>'40px'),
                  ),
			array(
					'type'=>'raw',
					'name'=>'usr.nama'
			),
			array(
					'type'=>'raw',
					'header'=>'Wall',
					'name'=>'wall.isi'
			),
		//'wallid',
		//'usrid',
			array(
					'header'=>'Respon',
					'name'=>'isi'
			),
		'isi',
		'created',
		//'updated',
		/*
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
