
<?php
$this->menu=array(
	array('label'=>'Create Usr','url'=>array('create')),
);

?>

<h4>User</h4>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'usr-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                               'name'=>'id' ,
                               'htmlOptions'=>array ('width' =>'40px'),
                  ),
			
		'nama',
		'username',
		//'password',
		'email',
		'notelp',
		/*
		'alamat',
		'jenis_kelamin',
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
