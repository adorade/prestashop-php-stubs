<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Tax;

/**
 * Form type for tax add/edit
 */
class TaxRulesGroupType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var bool
     */
    protected $isShopFeatureEnabled;
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $isShopFeatureEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, bool $isShopFeatureEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
