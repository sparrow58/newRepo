<?php
/* @var $this CulturalAttacheController */
/* @var $model CulturalAttache */

$this->breadcrumbs=array(
	'Cultural Attaches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CulturalAttache', 'url'=>array('index')),
	array('label'=>'Create CulturalAttache', 'url'=>array('create')),
	array('label'=>'View CulturalAttache', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CulturalAttache', 'url'=>array('admin')),
);
?>

<h1>Update CulturalAttache <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>