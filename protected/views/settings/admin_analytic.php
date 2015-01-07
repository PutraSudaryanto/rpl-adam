<?php
/**
 * Ommu Settings (ommu-settings)
 * @var $this SettingsController * @var $model OmmuSettings * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
 
	$this->breadcrumbs=array(
		'Ommu Settings'=>array('manage'),
		'Manage',
	);
?>

<div class="form" name="post-on">
	<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
		'id'=>'ommu-settings-form',
		'enableAjaxValidation'=>true,
		//'htmlOptions' => array('enctype' => 'multipart/form-data')
	)); ?>

	<?php //begin.Messages ?>
	<div id="ajax-message">
		<?php echo $form->errorSummary($model); ?>
	</div>
	<?php //begin.Messages ?>

	<fieldset>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'analytic'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'analytic'); ?>
				<?php echo $form->error($model,'analytic'); ?>
			</div>
		</div>

		<div class="clearfix">
			<label>
				<?php echo $model->getAttributeLabel('analytic_id');?>
				<span>Enter the Website Profile ID to use Google Analytics.</span>
			</label>
			<div class="desc">
				<?php echo $form->textField($model,'analytic_id',array('maxlength'=>32)); ?>
				<?php echo $form->error($model,'analytic_id'); ?>
			</div>
		</div>

		<div class="submit clearfix">
			<label>&nbsp;</label>
			<div class="desc">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('onclick' => 'setEnableSave()')); ?>
			</div>
		</div>

	</fieldset>
	<?php $this->endWidget(); ?>
</div>