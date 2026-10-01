<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetProductIsEnabledHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\GetProductIsEnabledHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetProductIsEnabled $query)
    {
    }
}
