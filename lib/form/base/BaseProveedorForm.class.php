<?php

/**
 * Proveedor form base class.
 *
 * @method Proveedor getObject() Returns the current form's model object
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseProveedorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nombreempresa' => new sfWidgetFormInputText(),
      'giro'          => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'entrecalles'   => new sfWidgetFormInputText(),
      'colonia'       => new sfWidgetFormInputText(),
      'cp'            => new sfWidgetFormInputText(),
      'ciudad'        => new sfWidgetFormInputText(),
      'tellocal'      => new sfWidgetFormInputText(),
      'telmovil'      => new sfWidgetFormInputText(),
      'idnextel'      => new sfWidgetFormInputText(),
      'correo'        => new sfWidgetFormInputText(),
      'observaciones' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombreempresa' => new sfValidatorString(array('max_length' => 255)),
      'giro'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 255)),
      'entrecalles'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'colonia'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cp'            => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ciudad'        => new sfValidatorString(array('max_length' => 255)),
      'tellocal'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'telmovil'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'idnextel'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'correo'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'observaciones' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));


Warning: call_user_func() expects parameter 1 to be a valid callback, class 'ProveedorPeer' does not have a method 'getUniqueColumnNames' in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562

Warning: Invalid argument supplied for foreach() in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562
    $this->widgetSchema->setNameFormat('proveedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proveedor';
  }


}
