<?php
$this->breadcrumbs=array(
	'Personal'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Listado Personal','url'=>array('index')),
array('label'=>'Agregar  Personal','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('datos-personales-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1> Administrar Personal</h1>
<p>
Usted opcionalmente puede usar operadores de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>	o <b>=</b>) al inicio de los valores de búsqueda para especificar cómo debe hacerse la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'datos-personales-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		
		array(
		'name'=>'cedula',
		'header'=>'Cédula',
		'htmlOptions'=>array('align'=>'center','style'=>'text-align: left','font-weight: bold','width'=>'8%'),
		'value'=>'($data->cedula)' ),	
		
		array(
		'name'=>'primer_nombre',
		'header'=>'Nombre',
		'htmlOptions'=>array('align'=>'center','style'=>'text-align: left','font-weight: bold','width'=>'18%'),
		'value'=>'($data->primer_nombre)' ),
            
		
		array(
		'name'=>'primer_apellido',
		'header'=>'Apellido',
		'htmlOptions'=>array('align'=>'center','style'=>'text-align: left','font-weight: bold','width'=>'18%'),
		'value'=>'($data->primer_apellido)' ),
		array(
		'name'=>'record_status',
		'header'=>'Estatus ',
		'htmlOptions'=>array('align'=>'center','style'=>'text-align: center','font-weight: bold','width'=>'12%'),
		'filter'=>array('' => 'Seleccione', '1' => 'Activo', '0'=>'Desactivado'),
		'value'=>'($data->record_status>="1")?("Activo"):("Desactivado")' ),
                array(
		'name'=>'nacionalidad',
		'header'=>'Nacionalidad',
		'htmlOptions'=>array('align'=>'center','style'=>'text-align: center','font-weight: bold','width'=>'15%'),
		'filter'=>array('' => 'Seleccione', 'V' => 'Venezolano', 'E'=>'Extranjero'),
		'value'=>'($data->nacionalidad>="V")?("Venezolano"):("Extranjero")' ),
                array(
		'name'=>'observaciones_personal',
		'header'=>'Observacion',
		'htmlOptions'=>array('align'=>'center','style'=>'text-align: left','font-weight: bold','width'=>'20%'),
		'value'=>'($data->observaciones_personal)' ),
		/*
		'fecha_nacimiento',
		'sexo',
                 'segundo_nombre',
		'nacionalidad',
		'correo_electronico',
		'telefono_local',
		'celular',
		'fecha_registro',
		'observaciones_personal',
		'direccion',
		'record_status',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',

'template'=>'{view} {update} {delete}',
'header' => 'Acciones',
'buttons'=>array('delete'=>array('options'=>array(''),
'click'=>"function(){if(!confirm('".Yii::t('warnings','Esta Seguro de Eliminar este registro')."'))return false;}")),
	),
),
)); ?>
