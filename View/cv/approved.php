
<?php
/* @var $this TrainingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Graduates Internship'=>array('/graduated/training'),
	'Approved',
);

$this->menu=array(
	array('label'=>'List Uploaded CVs detiels', 'url'=>array('/cv/index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
        'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger 
        ),
    )); ?>


	<b>  upload your CV. </b>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>

        
