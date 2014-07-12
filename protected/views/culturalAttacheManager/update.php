<?php
/* @var $this CulturalAttacheManagerController */
/* @var $model CulturalAttacheManager */

$this->breadcrumbs=array(
	'Cultural Attache Managers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CulturalAttacheManager', 'url'=>array('index')),
	array('label'=>'Create CulturalAttacheManager', 'url'=>array('create')),
	array('label'=>'View CulturalAttacheManager', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CulturalAttacheManager', 'url'=>array('admin')),
);
?>

<h1>Update CulturalAttacheManager <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>