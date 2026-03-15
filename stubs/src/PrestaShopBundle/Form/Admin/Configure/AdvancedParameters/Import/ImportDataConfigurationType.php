<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import;

/**
 * Class ImportDataConfigurationType is responsible for displaying the configuration of the
 * Advanced Parameters -> Import -> second step list.
 */
class ImportDataConfigurationType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $dataMatchChoices
     * @param array $entityFieldChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $dataMatchChoices, array $entityFieldChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
