<?php
/* @var $this CulturalAttacheController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cultural Attaches',
);

$this->menu=array(
	array('label'=>'Create CulturalAttache', 'url'=>array('create')),
	array('label'=>'Manage CulturalAttache', 'url'=>array('admin')),
);
?>

<h1>Cultural Attaches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
