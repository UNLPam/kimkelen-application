<?php

/**
 * LetterMarkAverage form base class.
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
class BaseLetterMarkAverageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'letter_mark_1'       => new sfWidgetFormInput(),
      'letter_mark_2'       => new sfWidgetFormInput(),
      'letter_mark_3'       => new sfWidgetFormInput(),
      'letter_mark_4'       => new sfWidgetFormInput(),
      'letter_mark_5'       => new sfWidgetFormInput(),
      'letter_mark_average' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorPropelChoice(array('model' => 'LetterMarkAverage', 'column' => 'id', 'required' => false)),
      'letter_mark_1'       => new sfValidatorString(array('max_length' => 255)),
      'letter_mark_2'       => new sfValidatorString(array('max_length' => 255)),
      'letter_mark_3'       => new sfValidatorString(array('max_length' => 255)),
      'letter_mark_4'       => new sfValidatorString(array('max_length' => 255)),
      'letter_mark_5'       => new sfValidatorString(array('max_length' => 255)),
      'letter_mark_average' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('letter_mark_average[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LetterMarkAverage';
  }


}
