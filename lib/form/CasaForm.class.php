<?php

/**
 * Casa form.
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class CasaForm extends BaseCasaForm
{
  protected $matrimonios = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $jovenes = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $jovencitas = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $peques = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
   
 	public function configure() {
        parent::configure();
        unset($this['id'],$this['totalpersonas']);
        
        
        //$this->setWidget('ciudad', new sfWidgetFormChoice(array('choices' => $this->ciudad)));      
        $this->setWidget('matrimonios', new sfWidgetFormChoice(array('choices' => $this->matrimonios)));
        $this->setWidget('jovenes', new sfWidgetFormChoice(array('choices' => $this->jovenes)));
        $this->setWidget('jovencitas', new sfWidgetFormChoice(array('choices' => $this->jovencitas)));
        $this->setWidget('peques', new sfWidgetFormChoice(array('choices' => $this->peques)));
	      
        $this->validatorSchema['nombre']->setMessage('required', 'Requerido');
        $this->validatorSchema['apaterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['amaterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['direccion']->setMessage('required', 'Requerido');
        $this->validatorSchema['ciudad']->setMessage('required', 'Requerido');
       

        $this->validatorSchema['cp']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
       
       
        
        $this->setValidator('cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
       
        $this->setValidator('telmovil', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('telcasa', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        
	      

        $this->widgetSchema->setHelps(array(
            'cp' => 'Formato a 5 digitos numericos sin espacios #####',
            'ruta' => 'Nombre de la ruta',
            'telcasa' => 'Formato mayor 8 digitos numericos como minimo sin espacios ##########',
            'telmovil' => 'Formato a 10 digitos sin numericos espacios sin 044 ##########'
            ));

        $this->widgetSchema['observaciones'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));

      }
        protected function doSave($con = null) {
          
          $matrimonios=2;
          $total = $this->getValue('jovenes')+$this->getValue('jovencitas')+$this->getValue('peques')+($this->getValue('matrimonios')*$matrimonios);
          $this->object->setTotalpersonas($total);

          parent::doSave($con);  
        }
}
