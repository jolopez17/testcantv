<?php
$this->breadcrumbs=array(
	'Personal',
);

$this->menu=array(
array('label'=>'Agregar Personal','url'=>array('create')),
array('label'=>'Administrar  Personal','url'=>array('admin')),
);
?>

<h1>Datos Personales</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
