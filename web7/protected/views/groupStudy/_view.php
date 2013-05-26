<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usrid')); ?>:</b>
	<?php echo CHtml::encode($data->usrid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mapelid')); ?>:</b>
	<?php echo CHtml::encode($data->mapelid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>