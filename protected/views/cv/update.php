<?php
/* @var $this CvController */
/* @var $model TrainingCv */

$this->breadcrumbs=array(
	'Training Cvs'=>array('index'),
	$model->Default_ID=>array('view','id'=>$model->Default_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrainingCv', 'url'=>array('index')),
	array('label'=>'Create TrainingCv', 'url'=>array('create')),
	array('label'=>'View TrainingCv', 'url'=>array('view', 'id'=>$model->Default_ID)),
	array('label'=>'Manage TrainingCv', 'url'=>array('admin')),
);
?>

<h1>Update TrainingCv <?php echo $model->Default_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>