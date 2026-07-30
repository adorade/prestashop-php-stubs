<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Localization;

/**
 * Class ImportLocalizationPackType is responsible for building 'Import a localization pack' form
 * in 'Improve > International > Localization'.
 */
class ImportLocalizationPackType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $localizationPackChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $localizationPackChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
