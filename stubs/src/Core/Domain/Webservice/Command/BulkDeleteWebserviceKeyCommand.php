<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\Command;

/**
 * Deletes states on bulk action
 */
class BulkDeleteWebserviceKeyCommand
{
    /**
     * @param array<int, int> $webserviceKeyIds
     */
    public function __construct(array $webserviceKeyIds)
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject\WebserviceKeyId>
     */
    public function getWebserviceKeyIds(): array
    {
    }
}
