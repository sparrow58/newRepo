<?php
/* @var $this TrainingCvController */
/* @var $model TrainingCv */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'training-cv-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data')
            ));
    ?>
	
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->fileField($model,'Doc_File',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Doc_File'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script> 
$('#buttonStateful').click(function() {
    var btn = $(this);
    btn.button('loading'); // call the loading function
    setTimeout(function() {
        btn.button('reset'); // call the reset function
    }, 3000);
});

</script> 