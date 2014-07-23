<?php

/**
 * Ministerio form base class.
 *
 * @method Ministerio getObject() Returns the current form's model object
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseMinisterioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'name' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name' => new sfValidatorString(array('max_length' => 255)),
    ));


Warning: call_user_func() expects parameter 1 to be a valid callback, class 'MinisterioPeer' does not have a method 'getUniqueColumnNames' in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562

Warning: Invalid argument supplied for foreach() in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562
    $this->widgetSchema->setNameFormat('ministerio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ministerio';
  }


}
