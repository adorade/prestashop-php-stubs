<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice;

/**
 * Is used to create form for adding/editing Webservice Key
 */
class WebserviceKeyType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $isMultistoreFeatureUsed
     * @param array $resourceChoices
     * @param array $permissionChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $isMultistoreFeatureUsed, array $resourceChoices, array $permissionChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
