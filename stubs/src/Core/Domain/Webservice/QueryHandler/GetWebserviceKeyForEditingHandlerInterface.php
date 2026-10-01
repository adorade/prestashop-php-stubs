<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\QueryHandler;

/**
 * Interface for service that handles webservice key data retrieving for editing
 */
interface GetWebserviceKeyForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Webservice\Query\GetWebserviceKeyForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Webservice\QueryResult\EditableWebserviceKey
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Query\GetWebserviceKeyForEditing $query);
}
