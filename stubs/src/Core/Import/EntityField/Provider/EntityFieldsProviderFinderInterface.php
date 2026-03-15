<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Interface EntityFieldsProviderFinderInterface describes an entity fields finder.
 */
interface EntityFieldsProviderFinderInterface
{
    /**
     * Find the appropriate entity fields provider.
     *
     * @param int $importEntity import entity ID (@see PrestaShop\PrestaShop\Core\Import\Entity)
     *
     * @return EntityFieldsProviderInterface
     */
    public function find($importEntity);
}
