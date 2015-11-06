
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'datos-personales-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<div class="container-fluid">

	
<div class="row">
		
	<div class="col-xs-3">
	  <?php echo $form->textFieldGroup($model,'cedula',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
	<div class="col-xs-3">
	   <?php echo $form->textFieldGroup($model,'primer_nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
	<div class="col-xs-3">
	   <?php echo $form->textFieldGroup($model,'segundo_nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
</div>
    <hr>
<div class="row">
        <div class="col-xs-3">
	   <?php echo $form->textFieldGroup($model,'primer_apellido',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
        <div class="col-xs-3">
	   <?php echo $form->textFieldGroup($model,'segundo_apellido',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
        <div class="col-xs-3">		
	   <?php echo $form->datePickerGroup($model,'fecha_nacimiento',array('widgetOptions'=>array('options'=>array('format'=>'yyyy-mm-dd'), 'htmlOptions'=>array('class'=>'span5')))); ?>
	</div>           
</div>
    <hr>
<div class="row">
        <div class="col-xs-2">	
	   <?php echo $form->dropDownListGroup($model,'sexo',array('widgetOptions'=>array('htmlOptions'=>array(), 'data' => array('' => 'Seleccione', 'M' => 'Masculino', 'F'=>'Femenino' ),))); ?>
	</div>
	<div class="col-xs-2">	
	   <?php echo $form->dropDownListGroup($model,'nacionalidad',array('widgetOptions'=>array('htmlOptions'=>array(), 'data' => array('' => 'Seleccione', 'V' => 'Venezolano', 'E'=>'Extranjero' ),))); ?>
	</div>	
        <div class="col-xs-5">
	   <?php echo $form->textFieldGroup($model,'correo_electronico',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
</div>
    <hr>
<div class="row">	
    
    	<div class="col-xs-3">
	    <?php echo $form->textFieldGroup($model,'telefono_local',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
      	<div class="col-xs-3">
            <?php echo $form->textFieldGroup($model,'celular',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
        </div>
        <div class="col-xs-3">		
	    <?php echo $form->textFieldGroup($model,'fecha_registro',array('widgetOptions'=>array('options'=>array('format'=>'yyyy-mm-dd'), 'htmlOptions'=>array('value'=>CTimestamp::formatDate('d-m-Y'),'readonly'=>'readonly','class'=>'span5')))); ?>	
        </div>
</div>
    <hr>
<div class="row">	
    <div class="col-xs-3">
	<?php echo $form->textFieldGroup($model,'observaciones_personal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>150)))); ?>
    </div>
     <div class="col-xs-3">
	<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>150)))); ?>
     </div>
     <div class="col-xs-2">	
 	<?php echo $form->dropDownListGroup($model,'record_status',array('widgetOptions'=>array('htmlOptions'=>array(), 'data' => array('' => 'Seleccione', '1' => 'Activo', '0'=>'Desactivado' ),))); ?>
     </div>
</div>    	
		
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Agregar' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
