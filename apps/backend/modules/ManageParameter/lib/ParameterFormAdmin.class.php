<?php

/**
 * Parameter form.
 *
 * @package    Web_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ParameterFormAdmin extends BaseParameterForm
{
    public function configure()
    {
        $cat = ParameterCategoryTable::getInstance()->getListParamCat();
        $this->setWidgets(array(
            'name' => new sfWidgetFormInputText(),
            'priority' => new sfWidgetFormInputText(),
            'cat_id' => new sfWidgetFormInputText(),
            'is_active' => new sfWidgetFormInputCheckbox(),
        ));

        $this->setValidators(array(
            'name' => new sfValidatorString(array('max_length' => 255)),
            'priority' => new sfValidatorInteger(array('required' => false)),
            'cat_id' => new sfValidatorInteger(array('required' => false)),
            'is_active' => new sfValidatorBoolean(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('parameter[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}
