<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_datos_personales')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id_datos_personales), array('view', 'id' => $data->id_datos_personales)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
    <?php echo CHtml::encode($data->cedula); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre')); ?>:</b>
    <?php echo CHtml::encode($data->primer_nombre); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('segundo_nombre')); ?>:</b>
    <?php echo CHtml::encode($data->segundo_nombre); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido')); ?>:</b>
    <?php echo CHtml::encode($data->primer_apellido); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('segundo_apellido')); ?>:</b>
    <?php echo CHtml::encode($data->segundo_apellido); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
    <?php
    echo Yii::app()->dateFormatter->format("dd/MM/yyyy hh:mm:ss", $data->fecha_nacimiento);
    ?>
    <br />


    <b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
    <?php
    if (($data->sexo) == 'M') {
        echo CHtml::encode('Masculino');
    } elseif (($data->sexo) == 'F') {
        echo CHtml::encode('Femenino');
    } else {
        echo CHtml::encode($data->sexo);
    }
    ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
     
        <?php
    if (($data->nacionalidad) == 'V') {
        echo CHtml::encode('Venezolano');
    } elseif (($data->nacionalidad) == 'E') {
        echo CHtml::encode('Extranjero');
    } else {
        echo CHtml::encode($data->nacionalidad);
    }
    ?>
        
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('correo_electronico')); ?>:</b>
<?php echo CHtml::encode($data->correo_electronico); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('telefono_local')); ?>:</b>
<?php echo CHtml::encode($data->telefono_local); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
<?php echo CHtml::encode($data->celular); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_registro')); ?>:</b>
<?php echo CHtml::encode($data->fecha_registro); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_personal')); ?>:</b>
<?php echo CHtml::encode($data->observaciones_personal); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
<?php echo CHtml::encode($data->direccion); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('record_status')); ?>:</b>

    <?php
    if (($data->record_status) == 1){
    echo CHtml::encode('Activo');}
    elseif (($data->record_status) == 0){
    echo CHtml::encode('Desactivado');}
    else{
    echo CHtml::encode($data->record_status);}
    ?>
    <br />



</div>