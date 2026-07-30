<?php

namespace PrestaShopBundle\Form\Admin\Sell\Manufacturer;

/**
 * Defines form for manufacturer create/edit actions (Sell > Catalog > Brands & Suppliers)
 */
class ManufacturerType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $isMultistoreEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $isMultistoreEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
