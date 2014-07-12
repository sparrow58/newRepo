<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Create'),
);

$this->menu=array(
    array('label'=>UserModule::t('Manage Users'), 'url'=>array('admin')),
    array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin')),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
);
?>
<h1><?php echo UserModule::t("Create User"); ?></h1>


<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
                'id'=>'userDialog',
                'options'=>array(
                    'title'=>Yii::t('user','Create user'),
                    'autoOpen'=>true,
                    'show'=>array(
                        'effect'=>'blind',
                        'duration'=>500,
                     ),
                    'modal'=>'true',
                    'width'=>'30%',
                    'height'=>'auto',
                ),
                ));

	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));?>
<?php $this->endWidget('zii.widgets.jui.CJuiDialog');?>


<?php
	//echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>