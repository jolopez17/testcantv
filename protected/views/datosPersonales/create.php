<?php
$this->breadcrumbs=array(
	'Personal'=>array('index'),
	'Agregar',
);

$this->menu=array(
array('label'=>'Listado Personal','url'=>array('index')),
array('label'=>'Administrar Personal','url'=>array('admin')),
);
?>

<h1>Agregar  Personal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>