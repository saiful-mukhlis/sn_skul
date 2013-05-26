<h4>Profile #<?php echo $model->nama; ?></h4>
<?php 
echo CHtml::image(H::getAvatar($model->id));
?>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nama',
		//'username',
		//'password',
		'email',
		'notelp',
		'alamat',
		//'jenis_kelamin',
		//'status',
	),
)); ?>
<div class="form-actions">
		<?php echo '   '.CHtml::link('Back', array('in/room','id'=>$id), array('class'=>'btn btn-info'))?>
		</div>