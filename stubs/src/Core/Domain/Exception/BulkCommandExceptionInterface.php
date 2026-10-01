<?php

namespace PrestaShop\PrestaShop\Core\Domain\Exception;

interface BulkCommandExceptionInterface extends \Throwable
{
    /**
     * @return \Throwable[]
     */
    public function getExceptions(): array;
}
