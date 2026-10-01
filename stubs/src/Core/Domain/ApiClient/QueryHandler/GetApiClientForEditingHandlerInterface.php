<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\QueryHandler;

interface GetApiClientForEditingHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Query\GetApiClientForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ApiClient\QueryResult\EditableApiClient;
}
