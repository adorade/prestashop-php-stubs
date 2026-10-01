<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\QueryHandler;

interface GetDiscountTypesHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult\DiscountType[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Query\GetDiscountTypes $query): array;
}
