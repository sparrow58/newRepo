<?php
/* @var $this CulturalAttacheManagerController */
/* @var $model CulturalAttacheManager */

$this->breadcrumbs=array(
	'Cultural Attache Managers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CulturalAttacheManager', 'url'=>array('index')),
	array('label'=>'Manage CulturalAttacheManager', 'url'=>array('admin')),
);
?>

<h1>Create CulturalAttacheManager</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>