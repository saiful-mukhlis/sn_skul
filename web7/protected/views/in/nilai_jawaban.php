
<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12"><h4>Pemberian Nilai</h4></div>
	</div>
</div>

<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12"><h5><?php echo $j->soal->title;?></h5></div>
		<div class="span12"><?php echo $j->soal->isi;?></div>
	</div>
</div>

<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12"><h5><?php echo 'Jawaban dari '.$j->usr->nama;?></h5></div>
		<div class="span12"><?php echo $j->isi;?></div>
	</div>
</div>


<div class="form">
<?php
$form = $this->beginWidget ( 'bootstrap.widgets.TbActiveForm', array (
		'id' => 'nilai',
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


		<?php echo $form->textFieldRow($model,'nilai',array('class'=>'span3')); ?>


		<div class="form-actions">
		<?php echo CHtml::submitButton('Proses',array('class'=>'btn btn-primary')); ?>
		<?php echo '   '.CHtml::link('Cancel', array('in/room','id'=>$id), array('class'=>'btn btn-info'))?>
		</div>
<?php $this->endWidget(); ?>


</div>
<!-- form -->


