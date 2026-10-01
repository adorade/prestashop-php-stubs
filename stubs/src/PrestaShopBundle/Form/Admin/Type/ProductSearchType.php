<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Initiates input with ability to search for any type of product
 */
class ProductSearchType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\Routing\RouterInterface $router, string $employeeIsoCode)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getParent(): string
    {
    }
}
