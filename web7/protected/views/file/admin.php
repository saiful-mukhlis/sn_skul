<?php


$this->menu=array(
	array('label'=>'Data File','url'=>array('admin')),
);

?>

<h4>Files</h4>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'file-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                               'name'=>'id' ,
                               'htmlOptions'=>array ('width' =>'40px'),
                  ),

		'mapel.name',
		'title',
		'path',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
