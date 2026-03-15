<?php

namespace PrestaShop\PrestaShop\Core\Support;

/**
 * Interface ContactRepositoryInterface defines contract for shop contact repository.
 */
interface ContactRepositoryInterface
{
    /**
     * Get shop contacts.
     *
     * @param int $langId Language ID in which contacts should be returned
     *
     * @return array
     */
    public function findAllByLangId($langId);
}
