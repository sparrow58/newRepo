<?php
/* @var $this CvController */
/* @var $model TrainingCv */

$this->breadcrumbs=array(
	'Training Cvs'=>array('index'),
	$model->Default_ID,
);

$this->menu=array(
	array('label'=>'List TrainingCv', 'url'=>array('index')),
	array('label'=>'Create TrainingCv', 'url'=>array('create')),
	array('label'=>'Update TrainingCv', 'url'=>array('update', 'id'=>$model->Default_ID)),
	array('label'=>'Delete TrainingCv', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Default_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrainingCv', 'url'=>array('admin')),
);
?>

<h1>View TrainingCv #<?php echo $model->Default_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Default_ID',
		'Users_ID',
		'Doc_File',
		'Doc_Type',
		'Doc_Size',
		'Up_date',
		'Doc_isNew',
	),
)); ?>
