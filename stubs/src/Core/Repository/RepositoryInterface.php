<?php

namespace PrestaShop\PrestaShop\Core\Repository;

/**
 * Define the contract to access entities.
 *
 * A repository should only contains methods for querying the data.
 */
interface RepositoryInterface
{
    /**
     * Returns the complete list of items.
     *
     * @return array
     */
    public function findAll();
}
