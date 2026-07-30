<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\Contact;

/**
 * Class ContactType
 */
class ContactType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const MAX_TITLE_LENGTH = 255;
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param DataTransformerInterface $singleDefaultLanguageArrayToFilledArrayDataTransformer
     * @param bool $isShopFeatureEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\Form\DataTransformerInterface $singleDefaultLanguageArrayToFilledArrayDataTransformer, $isShopFeatureEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
