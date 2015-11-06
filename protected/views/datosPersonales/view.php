<?php
$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->id_datos_personales,
);

$this->menu=array(
array('label'=>'Listado de Personas','url'=>array('index')),
array('label'=>'Agregar Personas','url'=>array('create')),
array('label'=>'Editar Personas','url'=>array('update','id'=>$model->id_datos_personales)),
array('label'=>'Eliminar Personas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_datos_personales),'confirm'=>'¿Usted está seguro de eliminar este ítem?')),
array('label'=>'Administrar Personal','url'=>array('admin')),
);
?>

<h1>Vista de Personas #<?php echo $model->id_datos_personales; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'cedula',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
    	      array('label' => 'Fecha Nacimiento', 'value'=>Yii::app()->dateFormatter->format("dd/MM/yyyy hh:mm:ss",$model->fecha_nacimiento)),
              array('label' => 'Sexo', 'value' => CHtml::encode($model->sexo>="M")?("Masculino"):("Femenino"), ),
	      array('label' => 'Nacionalidad', 'value' => CHtml::encode($model->nacionalidad>="V")?("Venezolano"):("Extranjero"), ),	
         	'correo_electronico',
		'telefono_local',
		'celular',
		'fecha_registro',
		'observaciones_personal',
		'direccion',
	      array('label' => 'record_status', 'value' => CHtml::encode($model->record_status>="1")?("Activo"):("Desactivado"), ),				

),
)); ?>
