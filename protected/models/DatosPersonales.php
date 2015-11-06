<?php

/**
 * This is the model class for table "datos_personales".
 *
 * The followings are the available columns in table 'datos_personales':
 * @property integer $id_datos_personales
 * @property integer $cedula
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $fecha_nacimiento
 * @property string $sexo
 * @property string $nacionalidad
 * @property string $correo_electronico
 * @property string $telefono_local
 * @property string $celular
 * @property string $fecha_registro
 * @property string $observaciones_personal
 * @property string $direccion
 * @property integer $record_status
 */
class DatosPersonales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datos_personales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula, primer_nombre, primer_apellido,sexo, nacionalidad,fecha_nacimiento', 'required'),
			array('cedula, record_status', 'numerical', 'integerOnly'=>true),
			array('primer_nombre, segundo_nombre, primer_apellido, segundo_apellido', 'length', 'max'=>20),
			array('sexo, nacionalidad', 'length', 'max'=>1),
                        array('cedula', 'length', 'max'=>9),
			array('correo_electronico', 'length', 'max'=>60),
			array('telefono_local, celular', 'length', 'max'=>15),
			array('observaciones_personal,direccion', 'length', 'max'=>150),
			array('fecha_nacimiento, fecha_registro', 'safe'),
                        array('cedula','unique','message'=>'Cedula ya creada.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_datos_personales, cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, sexo, nacionalidad, correo_electronico, telefono_local, celular, fecha_registro, observaciones_personal, direccion, record_status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

        
        	
	public function is_used()
	{	  
	    return false;
	}
        
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_datos_personales' => 'Id Datos Personales',
			'cedula' => 'Cedula',
			'primer_nombre' => 'Primer Nombre',
			'segundo_nombre' => 'Segundo Nombre',
			'primer_apellido' => 'Primer Apellido',
			'segundo_apellido' => 'Segundo Apellido',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'sexo' => 'Sexo',
			'nacionalidad' => 'Nacionalidad',
			'correo_electronico' => 'Correo Electronico',
			'telefono_local' => 'Telefono Local',
			'celular' => 'Telefono movil',
			'fecha_registro' => 'Fecha Registro',
			'observaciones_personal' => 'Observaciones Personal',
			'direccion' => 'Direccion',
			'record_status' => 'Estatus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_datos_personales',$this->id_datos_personales);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('primer_nombre',$this->primer_nombre,true);
		$criteria->compare('segundo_nombre',$this->segundo_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);
		$criteria->compare('segundo_apellido',$this->segundo_apellido,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('correo_electronico',$this->correo_electronico,true);
		$criteria->compare('telefono_local',$this->telefono_local,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('observaciones_personal',$this->observaciones_personal,true);
		$criteria->compare('direccion',$this->direccion);
		$criteria->compare('record_status',$this->record_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatosPersonales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
