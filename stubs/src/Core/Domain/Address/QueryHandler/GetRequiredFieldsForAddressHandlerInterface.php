<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler;

interface GetRequiredFieldsForAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Query\GetRequiredFieldsForAddress $query
     *
     * @return string[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetRequiredFieldsForAddress $query): array;
}
