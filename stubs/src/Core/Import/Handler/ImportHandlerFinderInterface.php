<?php

namespace PrestaShop\PrestaShop\Core\Import\Handler;

/**
 * Interface ImportHandlerFinderInterface describes an import handler finder.
 */
interface ImportHandlerFinderInterface
{
    /**
     * Find the proper import handler for given entity type.
     *
     * @param int $importEntityType
     *
     * @return ImportHandlerInterface
     */
    public function find($importEntityType);
}
