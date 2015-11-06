<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		
		<div class="col-xs-2">
			<?php echo $form->textFieldGroup($model,'cedula',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
		</div>
		
	 	<div class="col-xs-4">
			<?php echo $form->textFieldGroup($model,'primer_nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
		</div>
						
	</div>

	<div class="row">
		
		<div class="col-xs-2">
			<?php echo $form->textFieldGroup($model,'primer_apellido',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
		</div>
	
	
	        <div class="col-xs-2">
			<?php echo $form->dropDownListGroup($model,'nacionalidad',array('widgetOptions'=>array('htmlOptions'=>array(), 'data' => array('' => 'Seleccione', 'V' => 'Venezolano', 'E'=>'Extranjero' ),))); ?>
		</div>

		<div class="col-xs-2">	
			<?php echo $form->dropDownListGroup($model,'record_status',array('widgetOptions'=>array('htmlOptions'=>array(), 'data' => array('' => 'Seleccione', '1' => 'Activo', '0'=>'Desactivado' ),))); ?>
		</div>
        </div>
	
	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
