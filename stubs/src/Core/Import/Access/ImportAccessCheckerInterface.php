<?php

namespace PrestaShop\PrestaShop\Core\Import\Access;

/**
 * Interface ImportAccessCheckerInterface checks import access.
 */
interface ImportAccessCheckerInterface
{
    /**
     * Checks if data truncation is allowed.
     *
     * @return bool
     */
    public function canTruncateData();
}
