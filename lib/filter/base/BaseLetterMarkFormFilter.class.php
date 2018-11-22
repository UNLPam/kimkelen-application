<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * LetterMark filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
class BaseLetterMarkFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'letter' => new sfWidgetFormFilterInput(),
      'value'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'letter' => new sfValidatorPass(array('required' => false)),
      'value'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('letter_mark_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LetterMark';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'letter' => 'Text',
      'value'  => 'Number',
    );
  }
}
