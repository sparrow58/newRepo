<?php
/* @var $this CvController */
/* @var $model TrainingCv */

$this->breadcrumbs=array(
	'Training Cvs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrainingCv', 'url'=>array('index')),
	array('label'=>'Manage TrainingCv', 'url'=>array('admin')),
);
?>

<h1>Create TrainingCv</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>