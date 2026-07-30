<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\QueryHandler;

/**
 * Interface for service that handles webservice key data retrieving for editing
 */
interface GetWebserviceKeyForEditingHandlerInterface
{
    /**
     * @param GetWebserviceKeyForEditing $query
     *
     * @return EditableWebserviceKey
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Query\GetWebserviceKeyForEditing $query);
}
