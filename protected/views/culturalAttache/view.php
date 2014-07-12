<?php
/* @var $this CulturalAttacheController */
/* @var $model CulturalAttache */

$this->breadcrumbs=array(
	'Cultural Attaches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CulturalAttache', 'url'=>array('index')),
	array('label'=>'Create CulturalAttache', 'url'=>array('create')),
	array('label'=>'Update CulturalAttache', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CulturalAttache', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CulturalAttache', 'url'=>array('admin')),
);
?>

<h1>View CulturalAttache #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'country',
		'state',
		'city',
		'address',
		'zip_code',
		'email',
		'tel',
		'fax',
		'mailbox',
		'create_time',
		'update_time',
		'create_user_id',
		'update_user_id',
	),
)); ?>
