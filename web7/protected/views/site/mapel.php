


<div class="form">
<?php
  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'search',
   'htmlOptions'=>array('class'=>'form-horizontal'),
	'enableClientValidation'=>true,
    //   'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>



	<div class="control-group">
		<?php echo $form->labelEx($s,'search',array('class'=>'control-label')); ?>
        <section  class="controls">
		<?php echo $form->textField($s,'search',array('class'=>'')); ?>
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
         </section>
	</div>


	
		

<?php $this->endWidget(); ?>


</div><!-- form -->


<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12">
		<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$s->s(),
	'itemView'=>'_mapel',
)); ?>
		</div>
		<div class="span12">
		<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$s->s2(),
	'itemView'=>'_mapel',
)); ?>
		</div>
	</div>
</div>