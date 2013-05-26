<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'usr-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php // echo $form->errorSummary($model); ?>

	<?php  echo $form->passwordFieldRow($model,'passwordLama',array('class'=>'span5','maxlength'=>100)); ?>
	<?php  echo $form->passwordFieldRow($model,'passwordBaru',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Save',
		)); ?>  
		<?php echo CHtml::link('Cancel', array('site/index'), array('class'=>'btn btn-info'))?>
	</div>

<?php $this->endWidget(); ?>
