<?php
/* @var $this CulturalAttacheController */
/* @var $model CulturalAttache */

$this->breadcrumbs=array(
	'Cultural Attaches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CulturalAttache', 'url'=>array('index')),
	array('label'=>'Create CulturalAttache', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cultural-attache-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cultural Attaches</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cultural-attache-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'country',
		'state',
		'city',
		'address',
		'zip_code',
		/*
		'email',
		'tel',
		'fax',
		'mailbox',
		'create_time',
		'update_time',
		'create_user_id',
		'update_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
