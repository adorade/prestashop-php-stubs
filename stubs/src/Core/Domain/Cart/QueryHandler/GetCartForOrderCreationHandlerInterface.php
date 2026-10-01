<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler;

/**
 * Interface for handling GetCartForOrderCreation query
 */
interface GetCartForOrderCreationHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForOrderCreation $query): \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;
}
