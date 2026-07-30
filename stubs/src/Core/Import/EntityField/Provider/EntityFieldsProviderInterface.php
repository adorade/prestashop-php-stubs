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
     * @return EntityFieldCollectionInterface
     */
    public function getCollection();
}
