<?php

namespace PrestaShop\PrestaShop\Core\Import\Entity;

/**
 * Interface ImportEntityDeleterInterface describes an import entity deleter.
 */
interface ImportEntityDeleterInterface
{
    /**
     * Delete all import entity data for given import entity type.
     *
     * @param int $importEntity
     */
    public function deleteAll($importEntity);
}
