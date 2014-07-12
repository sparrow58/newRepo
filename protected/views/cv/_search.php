<?php
/* @var $this CvController */
/* @var $model TrainingCv */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Default_ID'); ?>
		<?php echo $form->textField($model,'Default_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Users_ID'); ?>
		<?php echo $form->textField($model,'Users_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_File'); ?>
		<?php echo $form->textField($model,'Doc_File',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_Type'); ?>
		<?php echo $form->textField($model,'Doc_Type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_Size'); ?>
		<?php echo $form->textField($model,'Doc_Size',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Up_date'); ?>
		<?php echo $form->textField($model,'Up_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_isNew'); ?>
		<?php echo $form->textField($model,'Doc_isNew',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->