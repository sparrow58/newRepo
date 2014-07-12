<?php
/* @var $this CvController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Training Cvs',
);

$this->menu=array(
	array('label'=>'Upload Training CV', 'url'=>array('create')),
	array('label'=>'Manage Training CVs', 'url'=>array('admin')),
);
?>

<h1>Training Cvs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
