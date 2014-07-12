<?php
/* @var $this CulturalAttacheManagerController */
/* @var $model CulturalAttacheManager */

$this->breadcrumbs=array(
	'Cultural Attache Managers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CulturalAttacheManager', 'url'=>array('index')),
	array('label'=>'Create CulturalAttacheManager', 'url'=>array('create')),
	array('label'=>'Update CulturalAttacheManager', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CulturalAttacheManager', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CulturalAttacheManager', 'url'=>array('admin')),
);
?>

<h1>View CulturalAttacheManager #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'email',
		'hire_date',
		'ca_id',
		'create_time',
		'update_time',
		'create_user_id',
		'update_user_id',
	),
)); ?>
