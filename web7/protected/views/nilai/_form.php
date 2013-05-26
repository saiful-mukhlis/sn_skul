<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'nilai-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'soalid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'usrid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nilai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
