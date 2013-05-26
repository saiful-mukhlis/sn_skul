<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>



<div class="container-fluid content">
<div class="row-fluid">


<div class="span12">


<div class="span6">

</div>

<div class="span6">

<div class="span12"><h1>Contact Us</h1></div>

<?php if(Yii::app()->user->hasFlash('contact')): ?>
<div class="contact-success alert alert-info">
  <!--   <a class='close' data-dismiss='alertd'>×</a> -->
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>



<div class="form">



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'hari-form',
	'enableAjaxValidation'=>false,
)); ?>


<?php echo $form->textFieldRow($model,'name',array('class'=>'span8')); ?>
<?php echo $form->textFieldRow($model,'email',array('class'=>'span8')); ?>
<?php echo $form->textFieldRow($model,'subject',array('class'=>'span8')); ?>
<?php echo $form->textAreaRow($model,'body',array('class'=>'span8')); ?>


	


<?php if(CCaptcha::checkRequirements()): ?>
<?php $this->widget('CCaptcha',array('buttonType'=>'button','buttonOptions'=>array('class'=>'btn'))); ?>

<?php echo $form->textFieldRow($model,'verifyCode',array('class'=>'span8')); ?>
<?php endif; ?>



		<div class="form-actions">
		<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>

</div>


</div>



</div>
</div>