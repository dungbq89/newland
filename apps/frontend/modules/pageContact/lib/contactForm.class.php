<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 6/13/15
 * Time: 11:18 PM
 */
class contactForm extends BaseAdCommentForm
{
    public function configure()
    {
        unset($this['create_date']);
        $this->setWidgets(array(
            'title'        => new sfWidgetFormInputText(),
            'full_name'    => new sfWidgetFormInputText(),
            'phone_number' => new sfWidgetFormInputText(),
            'email'        => new sfWidgetFormInputText(),
            'description'  => new sfWidgetFormTextarea(),
        ));

        $this->setValidators(array(
            'title'        => new sfValidatorString(array('max_length' => 255)),
            'full_name'    => new sfValidatorString(array('max_length' => 255)),
            'phone_number' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
            'email'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'description'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
        ));

        $this->widgetSchema->setNameFormat('ad_comment[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }
}
