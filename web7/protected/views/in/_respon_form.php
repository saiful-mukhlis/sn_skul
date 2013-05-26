<div class="form">
<?php
$m=new ResponForm();
$m->wallid=$id;
$form = $this->beginWidget ( 'bootstrap.widgets.TbActiveForm', array (
		'id' => 'respon-form',
		'type' => 'vertical',
		'htmlOptions' => array (
				'class' => 'form-vertical' 
		),
		'clientOptions' => array (
				'validateOnSubmit' => true 
		) 
) );
?>

<?php echo $form->hiddenField($m,'wallid'); ?>
<?php echo $form->textArea($m,'isi',array('class'=>'span12','maxlength'=>255, 'placeholder'=>'Your Comment')); ?>
<?php echo CHtml::submitButton('Send',array('class'=>'btn btn-primary btn-mini mt10')); ?>
<?php $this->endWidget(); ?>


</div>
<!-- form -->