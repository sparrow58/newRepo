<?php
/* @var $this CvController */
/* @var $model TrainingCv */

$this->breadcrumbs=array(
	'Training Cvs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TrainingCv', 'url'=>array('index')),
	array('label'=>'Create TrainingCv', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#training-cv-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Training Cvs</h1>

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
	'id'=>'training-cv-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Default_ID',
		'Users_ID',
		'Doc_File',
		'Doc_Type',
		'Doc_Size',
		'Up_date',
		/*
		'Doc_isNew',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
