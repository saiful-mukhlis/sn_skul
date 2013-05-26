<div class="form">
<?php
$form = $this->beginWidget ( 'bootstrap.widgets.TbActiveForm', array (
		'id' => 'materi',
		'htmlOptions' => array (
				'class' => 'form-horizontal' 
		),
		'enableClientValidation' => true,
		//'enableAjaxValidation'=>true,
		'clientOptions' => array (
				'validateOnSubmit' => true 
		) 
) );
?>


		<?php echo $form->textFieldRow($model,'title',array('class'=>'span12')); ?>

		<?php echo $form->redactorRow($model,'isi',array('maxlength'=>1000)); ?>

		<div class="form-actions">
		<?php echo CHtml::submitButton('Proses',array('class'=>'btn btn-primary')); ?>
		<?php echo '   '.CHtml::link('Cancel', array('in/room','id'=>$id), array('class'=>'btn btn-info'))?>
		</div>
<?php $this->endWidget(); ?>


</div>
<!-- form -->


