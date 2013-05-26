<h4>Tambah File</h4>
<div class="form">
<?php
$form = $this->beginWidget ( 'bootstrap.widgets.TbActiveForm', array (
		'id' => 'file',
		'htmlOptions' => array (
				'class' => 'form-horizontal' 
		),
		'htmlOptions'=>array('enctype' => 'multipart/form-data'),
		'enableClientValidation' => true,
		'enableAjaxValidation'=>false,
		'clientOptions' => array (
				'validateOnSubmit' => true 
		) 
) );
?>

		<?php echo $form->textFieldRow($model,'title',array('class'=>'span5')); ?>
		

		<?php 
// 		echo $form->labelEx($model, 'file');
// 		echo $form->fileField($model, 'file');
// 		echo $form->error($model, 'file');
		?>

		<?php  echo $form->fileFieldRow($model,'file',array('class'=>'span5')); ?>

		<div class="form-actions">
		<?php echo CHtml::submitButton('Proses',array('class'=>'btn btn-primary')); ?>
		<?php echo '   '.CHtml::link('Cancel', array('in/room','id'=>$id), array('class'=>'btn btn-info'))?>
		</div>
<?php $this->endWidget(); ?>


</div>
<!-- form -->


