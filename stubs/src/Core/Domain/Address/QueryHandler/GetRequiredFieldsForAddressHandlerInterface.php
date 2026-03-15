<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler;

interface GetRequiredFieldsForAddressHandlerInterface
{
    /**
     * @param GetRequiredFieldsForAddress $query
     *
     * @return string[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetRequiredFieldsForAddress $query): array;
}
