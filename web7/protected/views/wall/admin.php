<?php

$this->menu=array(
	array('label'=>'Wall','url'=>array('admin')),
);


?>

<h4>Wall</h4>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'wall-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                               'name'=>'id' ,
                               'htmlOptions'=>array ('width' =>'40px'),
                  ),
			
		'usr.nama',
		'mapel.name',
		array(
				'type'=>'raw',
				'name'=>'isi'
				),
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
