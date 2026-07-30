<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Class ProductFieldsProvider defines a product fields provider.
 */
final class ProductFieldsProvider implements \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
    }
}
