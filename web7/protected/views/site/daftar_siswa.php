<?php 
$cs=Yii::app()->getClientScript();
$cs->registerCssFile(Yii::app()->baseUrl.'/css/login.css');
?>
<div class="container">


<div id="bg">
  <?php echo CHtml::image(Yii::app()->baseUrl.'/img/study3.jpg')?>
</div>




<div class="front-container">
<div class="form">
<?php
$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'daftar-siswa',
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

    <fieldset>
		<legend>Pendaftaran untuk Siswa</legend>
		<hr />


		<div class="control-group">
		<?php echo $form->labelEx($model,'nama',array('class'=>'control-label')); ?>
        <section class="controls">
		<?php echo $form->textField($model,'nama',array('class'=>'')); ?>
		<?php echo $form->error($model,'nama',array('class'=>'help-inline')); ?>
         </section>
		</div>

		<div class="control-group">
		<?php echo $form->labelEx($model,'email',array('class'=>'control-label')); ?>
        <section class="controls">
		<?php echo $form->textField($model,'email',array('class'=>'')); ?>
		<?php echo $form->error($model,'email',array('class'=>'help-inline')); ?>
         </section>
		</div>

		<div class="control-group">
		<?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
                <section class="controls">
		<?php echo $form->passwordField($model,'password',array('class'=>'')); ?>
		<?php echo $form->error($model,'password',array('class'=>'help-inline')); ?>
                </section>
		</div>
		



		<div class="form-actions">
		<?php echo CHtml::submitButton('Proses',array('class'=>'btn btn-primary')); ?>
	</div>
	</fieldset>
<?php $this->endWidget(); ?>


</div>
<!-- form -->




<?php
Yii::app ()->clientScript->registerScript ( 'focususernama', 'document.getElementById("DaftarSiswa_nama").focus();', CClientScript::POS_END );
?> 
</div> <!-- front-container -->




</div> <!-- /container -->
