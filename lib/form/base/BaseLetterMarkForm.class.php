<?php

/**
 * LetterMark form base class.
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
class BaseLetterMarkForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'letter' => new sfWidgetFormInput(),
      'value'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorPropelChoice(array('model' => 'LetterMark', 'column' => 'id', 'required' => false)),
      'letter' => new sfValidatorString(array('max_length' => 255)),
      'value'  => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('letter_mark[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LetterMark';
  }


}
