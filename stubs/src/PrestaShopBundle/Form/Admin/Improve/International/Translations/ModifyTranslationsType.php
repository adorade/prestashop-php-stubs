<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Translations;

/**
 * Class ModifyTranslationsType is responsible for building 'Modify translations' form
 * in 'Improve > International > Translations' page.
 */
class ModifyTranslationsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const CORE_TRANSLATIONS_CHOICE_INDEX = '0';
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $translationTypeChoices
     * @param array $emailContentTypeChoices
     * @param array $themeChoices
     * @param array $moduleChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $translationTypeChoices, array $emailContentTypeChoices, array $themeChoices, array $moduleChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
