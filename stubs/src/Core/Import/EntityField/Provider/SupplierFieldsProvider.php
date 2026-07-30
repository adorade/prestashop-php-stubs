<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Class SupplierFieldsProvider defines a supplier fields provider.
 */
final class SupplierFieldsProvider implements \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderInterface
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
