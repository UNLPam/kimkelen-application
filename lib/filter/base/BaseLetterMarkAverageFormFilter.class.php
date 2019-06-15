<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * LetterMarkAverage filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
class BaseLetterMarkAverageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'letter_mark_1'       => new sfWidgetFormFilterInput(),
      'letter_mark_2'       => new sfWidgetFormFilterInput(),
      'letter_mark_3'       => new sfWidgetFormFilterInput(),
      'letter_mark_4'       => new sfWidgetFormFilterInput(),
      'letter_mark_5'       => new sfWidgetFormFilterInput(),
      'letter_mark_average' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'letter_mark_1'       => new sfValidatorPass(array('required' => false)),
      'letter_mark_2'       => new sfValidatorPass(array('required' => false)),
      'letter_mark_3'       => new sfValidatorPass(array('required' => false)),
      'letter_mark_4'       => new sfValidatorPass(array('required' => false)),
      'letter_mark_5'       => new sfValidatorPass(array('required' => false)),
      'letter_mark_average' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('letter_mark_average_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LetterMarkAverage';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'letter_mark_1'       => 'Text',
      'letter_mark_2'       => 'Text',
      'letter_mark_3'       => 'Text',
      'letter_mark_4'       => 'Text',
      'letter_mark_5'       => 'Text',
      'letter_mark_average' => 'Text',
    );
  }
}
