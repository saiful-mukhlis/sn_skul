<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'avatar',
	'enableAjaxValidation'=>false,
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>



	<?php  echo $form->errorSummary($model); ?>

	<?php echo $form->fileField($model,'img',array('class'=>'span5')); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Save',
		)); ?>  
		<?php echo CHtml::link('Cancel', array('site/index'), array('class'=>'btn btn-info'))?>
	</div>

<?php $this->endWidget(); ?>
