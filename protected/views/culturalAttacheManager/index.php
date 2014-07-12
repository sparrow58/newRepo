<?php
/* @var $this CulturalAttacheManagerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cultural Attache Managers',
);

$this->menu=array(
	array('label'=>'Create CulturalAttacheManager', 'url'=>array('create')),
	array('label'=>'Manage CulturalAttacheManager', 'url'=>array('admin')),
);
?>

<h1>Cultural Attache Managers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
