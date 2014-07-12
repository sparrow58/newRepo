<?php
/* @var $this CvController */
/* @var $data TrainingCv */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Default_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Default_ID), array('view', 'id'=>$data->Default_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Users_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Users_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_File')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_File); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_Type')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_Type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_Size')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_Size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Up_date')); ?>:</b>
	<?php echo CHtml::encode($data->Up_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_isNew')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_isNew); ?>
	<br />


</div>