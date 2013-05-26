<?php

$this->menu=array(
	array('label'=>'Materi','url'=>array('admin')),
);

?>

<h4>Materi</h4>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'materi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                               'name'=>'id' ,
                               'htmlOptions'=>array ('width' =>'40px'),
                  ),
			
			'mapel.code',
		'mapel.name',
		'title',
		//'isi',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
