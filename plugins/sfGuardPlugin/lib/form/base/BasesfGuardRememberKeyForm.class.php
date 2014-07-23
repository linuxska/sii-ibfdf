<?php

/**
 * sfGuardRememberKey form base class.
 *
 * @method sfGuardRememberKey getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfGuardRememberKeyForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'      => new sfWidgetFormInputHidden(),
      'remember_key' => new sfWidgetFormInputText(),
      'ip_address'   => new sfWidgetFormInputHidden(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'user_id'      => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id', 'required' => false)),
      'remember_key' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'ip_address'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIpAddress()), 'empty_value' => $this->getObject()->getIpAddress(), 'required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));


Warning: call_user_func() expects parameter 1 to be a valid callback, class 'sfGuardRememberKeyPeer' does not have a method 'getUniqueColumnNames' in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562

Warning: Invalid argument supplied for foreach() in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562
    $this->widgetSchema->setNameFormat('sf_guard_remember_key[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardRememberKey';
  }


}
