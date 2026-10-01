<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\QueryHandler;

interface GetDiscountForEditingHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Query\GetDiscountForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult\DiscountForEditing;
}
