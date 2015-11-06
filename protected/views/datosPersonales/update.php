<?php
$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->id_datos_personales=>array('view','id'=>$model->id_datos_personales),
	'Editar',
);

	$this->menu=array(
	array('label'=>'Listado Personal','url'=>array('index')),
	array('label'=>'Agregar Personal','url'=>array('create')),
	array('label'=>'Vista   Personal','url'=>array('view','id'=>$model->id_datos_personales)),
	array('label'=>'Administrar  Personal','url'=>array('admin')),
	);
	?>

	<h1>Editar Personal <?php echo $model->id_datos_personales; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>