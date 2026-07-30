<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Class StoreContactFieldCollectionFactory defines a store contact fields provider.
 */
final class StoreContactFieldsProvider implements \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderInterface
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
