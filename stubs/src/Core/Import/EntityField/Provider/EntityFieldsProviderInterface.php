<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Interface EntityFieldsProviderInterface defines a provider of entity fields.
 */
interface EntityFieldsProviderInterface
{
    /**
     * Get entity field as a collection.
     *
     * @return \PrestaShop\PrestaShop\Core\Import\EntityField\EntityFieldCollectionInterface
     */
    public function getCollection();
}
