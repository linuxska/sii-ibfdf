<?php

/**
 * Casa form base class.
 *
 * @method Casa getObject() Returns the current form's model object
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCasaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nombre'        => new sfWidgetFormInputText(),
      'apaterno'      => new sfWidgetFormInputText(),
      'amaterno'      => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'colonia'       => new sfWidgetFormInputText(),
      'cp'            => new sfWidgetFormInputText(),
      'ruta'          => new sfWidgetFormInputText(),
      'ciudad'        => new sfWidgetFormInputText(),
      'telcasa'       => new sfWidgetFormInputText(),
      'telmovil'      => new sfWidgetFormInputText(),
      'matrimonios'   => new sfWidgetFormInputText(),
      'peques'        => new sfWidgetFormInputText(),
      'jovenes'       => new sfWidgetFormInputText(),
      'jovencitas'    => new sfWidgetFormInputText(),
      'totalpersonas' => new sfWidgetFormInputText(),
      'coordenadas'   => new sfWidgetFormInputText(),
      'asignado'      => new sfWidgetFormInputText(),
      'alternos'      => new sfWidgetFormInputText(),
      'observaciones' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'        => new sfValidatorString(array('max_length' => 255)),
      'apaterno'      => new sfValidatorString(array('max_length' => 255)),
      'amaterno'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 255)),
      'colonia'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cp'            => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ruta'          => new sfValidatorString(array('max_length' => 32)),
      'ciudad'        => new sfValidatorString(array('max_length' => 255)),
      'telcasa'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'telmovil'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'matrimonios'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'peques'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'jovenes'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'jovencitas'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'totalpersonas' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'coordenadas'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'asignado'      => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'alternos'      => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'observaciones' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('casa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Casa';
  }


}
