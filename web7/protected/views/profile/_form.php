<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'usr-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php // echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>100)); ?>

	<?php // echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'notelp',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textAreaRow($model,'alamat',array('class'=>'span5','maxlength'=>100)); ?>

	<?php // echo $form->textFieldRow($model,'jenis_kelamin',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>
	
	<?php  echo $form->dropDownListRow($model,'jenis_kelamin',$model->getArrayJenisKelamin()); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>  
		<?php echo CHtml::link('Cancel', array('site/index'), array('class'=>'btn btn-info'))?>
	</div>

<?php $this->endWidget(); ?>
