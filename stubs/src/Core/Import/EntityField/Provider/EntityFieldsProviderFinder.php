<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Class EntityFieldsProviderFinder defines an entity fields provider finder.
 */
final class EntityFieldsProviderFinder implements \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderFinderInterface
{
    /**
     * @param array $entityFieldsProviders
     */
    public function __construct(array $entityFieldsProviders)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function find($importEntity)
    {
    }
}
