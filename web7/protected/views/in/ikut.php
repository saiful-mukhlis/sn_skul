<h4>Mengikuti Group Study</h4>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'ikut',
	'enableAjaxValidation'=>false,
)); ?>


	<?php // echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'code',array('class'=>'span5','maxlength'=>100)); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Proses',
		)); ?>
		<?php echo '   '.CHtml::link('Cancel', array('site/index'), array('class'=>'btn btn-info'))?>
	</div>

<?php $this->endWidget(); ?>
