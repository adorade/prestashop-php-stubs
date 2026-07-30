<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Translations;

/**
 * Class AddUpdateLanguageType is responsible for building add / update language form
 * in 'Improve > International > Translations' page.
 */
class AddUpdateLanguageType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $nonInstalledLocalizationChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $nonInstalledLocalizationChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
