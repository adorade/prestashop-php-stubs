<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Backup;

/**
 * Class BackupOptionsType builds form for backup options.
 */
class BackupOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * BackupOptionsType constructor.
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param Configuration $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
