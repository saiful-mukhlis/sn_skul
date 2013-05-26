<?php 
$cs=Yii::app()->getClientScript();
$cs->registerCssFile(Yii::app()->baseUrl.'/css/login.css');
?>
<div class="container">


<div id="bg">
  <?php echo CHtml::image(Yii::app()->baseUrl.'/img/study1.jpg')?>
</div>




<div class="front-container">

<div class="form">
<?php
  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
   'htmlOptions'=>array('class'=>'form-horizontal'),
	'enableClientValidation'=>true,
    //   'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>



	<div class="control-group">
		<?php echo $form->labelEx($model,'username',array('class'=>'control-label')); ?>
        <section  class="controls">
		<?php echo $form->textField($model,'username',array('class'=>'')); ?>
		<?php echo $form->error($model,'username',array('class'=>'help-inline')); ?>
         </section>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
                <section  class="controls">
		<?php echo $form->passwordField($model,'password',array('class'=>'')); ?>
		<?php echo $form->error($model,'password',array('class'=>'help-inline')); ?>
                </section>
	</div>

	<div class="control-group" style="margin-left: 30%;">
        <?php echo $form->checkBox($model,'rememberMe',array('class'=>'')); ?>
        <?php echo $form->label($model,"rememberMe",array('class'=>'checkbox help-inline')); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
		<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary')); ?>
	</div>
	

		


<?php $this->endWidget(); ?>


</div><!-- form -->


<?php 


?>

<?php
Yii::app ()->clientScript ->registerScript('focususername',
'document.getElementById("LoginForm_username").focus();'
,CClientScript::POS_END);
?> 

</div> <!-- front-container -->




</div> <!-- /container -->