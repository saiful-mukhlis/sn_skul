<?php

$this->menu=array(
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'Update User','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete User','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'User','url'=>array('admin')),
);
?>

<h4>View Usr #<?php echo $model->id; ?></h4>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'username',
		//'password',
		'email',
		'notelp',
		'alamat',
		//'jenis_kelamin',
		//'status',
	),
)); ?>
