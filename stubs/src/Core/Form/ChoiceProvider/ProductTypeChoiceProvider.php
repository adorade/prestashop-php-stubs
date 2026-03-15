<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

class ProductTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param Configuration $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoicesAttributes()
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices()
    {
    }
}
