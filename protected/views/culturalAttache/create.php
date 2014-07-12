<?php
/* @var $this CulturalAttacheController */
/* @var $model CulturalAttache */

$this->breadcrumbs=array(
	'Cultural Attaches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CulturalAttache', 'url'=>array('index')),
	array('label'=>'Manage CulturalAttache', 'url'=>array('admin')),
);
?>

<h1>Create CulturalAttache</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>