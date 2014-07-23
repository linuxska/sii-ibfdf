<?php

require_once '/usr/local/Cellar/php55/5.5.9/lib/php/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {

  	sfConfig::set('sf_phing_path', sfConfig::get('sf_root_dir').'/plugins/sfPropelORMPlugin/lib/vendor/phing/');
    sfConfig::set('sf_propel_path', sfConfig::get('sf_root_dir').'/plugins/sfPropelORMPlugin/lib/vendor/propel/');
    sfConfig::set('sf_propel_generator_path', sfConfig::get('sf_root_dir').'/plugins/sfPropelORMPlugin/lib/vendor/propel/generator/lib/');

    $this->enablePlugins('sfPropelORMPlugin');

    #$this->enablePlugins('sfPropelPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfGuardPlugin');
    $this->enablePlugins('sfGuardExtraPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
  }
}
