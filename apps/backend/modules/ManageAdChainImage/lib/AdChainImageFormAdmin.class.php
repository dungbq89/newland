<?php

/**
 * AdChainImage form.
 *
 * @package    Web_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AdChainImageFormAdmin extends BaseAdChainImageForm
{
    public function configure()
    {
        parent::configure();
        $i18n = sfContext::getInstance()->getI18N();
        $product = VtpProductsCategoryTable::getInstance()->getListChain(true, false);
        $this->setWidgets(array(
            'product' => new sfWidgetFormChoice(array(
                'choices' => $product,
                'multiple' => false,
                'expanded' => false,
            ), array()),
            'priority' => new sfWidgetFormInput(array(), array()),
            'file_path' => new sfWidgetFormInputFileEditable(array(
                'label' => ' ',
                'file_src' => VtHelper::getUrlImagePathThumb(sfConfig::get('app_ManageAdChainImage_prefix', 'chain'), $this->getObject()->getFilePath()),
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'template' => '<div>%file%<br />%input%</div>',
            )),
            'is_active' => new sfWidgetFormInputCheckbox(),
        ));

        $this->setValidators(array(
            'priority' => new sfValidatorPass(),
            'product' => new sfValidatorChoice(
                array('choices' => array_keys($product), 'required' => false),
                array('invalid' => $i18n->__('Danh m?c không h?p l?'))),

            'file_path' => new sfValidatorFileViettel(
                array(
                    'validated_file_class' => 'sfResizeMediumThumbnailImage',
                    'max_size' => sfConfig::get('app_ManageAdChainImage_maxsize', 999999),
                    'mime_types' => explode('|', sfConfig::get('app_ManageAdChainImage_type')), // array('image/jpeg', 'image/jpg', 'image/png', 'image/gif'),
                    'path' => sfConfig::get("sf_upload_dir") . '/' . sfConfig::get('app_ManageAdChainImage_prefix', 'chain'),
                    'required' => false
                ),
                array(
                    'mime_types' => $i18n->__('Ch? ???c upload các file có ??nh d?ng .jpg, .gif, .png'),
                    'max_size' => $i18n->__('Dung l??ng t?i ?a 5MB'),
                    'invalid' => $i18n->__('Ch? ???c upload các file có ??nh d?ng .jpg, .gif, .png')
                )),
            'is_active' => new sfValidatorBoolean(array('required' => false)),
        ));
        $this->widgetSchema->setNameFormat('AdChainImageFormAdmin[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}
