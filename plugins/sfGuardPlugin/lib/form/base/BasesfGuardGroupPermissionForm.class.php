<?php

/**
 * sfGuardGroupPermission form base class.
 *
 * @method sfGuardGroupPermission getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfGuardGroupPermissionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'group_id'      => new sfWidgetFormInputHidden(),
      'permission_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'group_id'      => new sfValidatorPropelChoice(array('model' => 'sfGuardGroup', 'column' => 'id', 'required' => false)),
      'permission_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardPermission', 'column' => 'id', 'required' => false)),
    ));


Warning: call_user_func() expects parameter 1 to be a valid callback, class 'sfGuardGroupPermissionPeer' does not have a method 'getUniqueColumnNames' in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562

Warning: Invalid argument supplied for foreach() in /Library/WebServer/Documents/sii-ibfdf/sii-ibfdf/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 562
    $this->widgetSchema->setNameFormat('sf_guard_group_permission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardGroupPermission';
  }


}
