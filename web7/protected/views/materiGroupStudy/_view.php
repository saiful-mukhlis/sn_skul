<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materiid')); ?>:</b>
	<?php echo CHtml::encode($data->materiid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupid')); ?>:</b>
	<?php echo CHtml::encode($data->groupid); ?>
	<br />


</div>