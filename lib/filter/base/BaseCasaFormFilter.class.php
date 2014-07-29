<?php

/**
 * Casa filter form base class.
 *
 * @package    ibfcelaya
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCasaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apaterno'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'amaterno'      => new sfWidgetFormFilterInput(),
      'direccion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colonia'       => new sfWidgetFormFilterInput(),
      'cp'            => new sfWidgetFormFilterInput(),
      'ruta'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telcasa'       => new sfWidgetFormFilterInput(),
      'telmovil'      => new sfWidgetFormFilterInput(),
      'matrimonios'   => new sfWidgetFormFilterInput(),
      'peques'        => new sfWidgetFormFilterInput(),
      'jovenes'       => new sfWidgetFormFilterInput(),
      'jovencitas'    => new sfWidgetFormFilterInput(),
      'totalpersonas' => new sfWidgetFormFilterInput(),
      'coordenadas'   => new sfWidgetFormFilterInput(),
      'asignado'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'alternos'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observaciones' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'apaterno'      => new sfValidatorPass(array('required' => false)),
      'amaterno'      => new sfValidatorPass(array('required' => false)),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'colonia'       => new sfValidatorPass(array('required' => false)),
      'cp'            => new sfValidatorPass(array('required' => false)),
      'ruta'          => new sfValidatorPass(array('required' => false)),
      'ciudad'        => new sfValidatorPass(array('required' => false)),
      'telcasa'       => new sfValidatorPass(array('required' => false)),
      'telmovil'      => new sfValidatorPass(array('required' => false)),
      'matrimonios'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'peques'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'jovenes'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'jovencitas'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'totalpersonas' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'coordenadas'   => new sfValidatorPass(array('required' => false)),
      'asignado'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'alternos'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'observaciones' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('casa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Casa';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'nombre'        => 'Text',
      'apaterno'      => 'Text',
      'amaterno'      => 'Text',
      'direccion'     => 'Text',
      'colonia'       => 'Text',
      'cp'            => 'Text',
      'ruta'          => 'Text',
      'ciudad'        => 'Text',
      'telcasa'       => 'Text',
      'telmovil'      => 'Text',
      'matrimonios'   => 'Number',
      'peques'        => 'Number',
      'jovenes'       => 'Number',
      'jovencitas'    => 'Number',
      'totalpersonas' => 'Number',
      'coordenadas'   => 'Text',
      'asignado'      => 'Number',
      'alternos'      => 'Number',
      'observaciones' => 'Text',
    );
  }
}
