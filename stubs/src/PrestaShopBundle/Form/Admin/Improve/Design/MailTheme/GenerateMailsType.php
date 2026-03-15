<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\MailTheme;

/**
 * Class GenerateMailsType is responsible for build the form to generate mail templates.
 */
class GenerateMailsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param ConfigurationInterface $configuration
     * @param array $mailThemes
     * @param array $themes
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, array $mailThemes, array $themes)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
