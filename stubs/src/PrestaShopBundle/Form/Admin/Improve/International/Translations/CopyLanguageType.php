<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Translations;

/**
 * Class CopyLanguageType is responsible for building 'Copy' form
 * in 'Improve > International > Translations' page.
 */
class CopyLanguageType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $themeChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $themeChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
