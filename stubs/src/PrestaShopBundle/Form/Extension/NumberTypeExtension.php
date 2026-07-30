<?php

namespace PrestaShopBundle\Form\Extension;

class NumberTypeExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Number\LocaleNumberTransformer $localeNumberTransformer)
    {
    }
    public static function getExtendedTypes(): iterable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
