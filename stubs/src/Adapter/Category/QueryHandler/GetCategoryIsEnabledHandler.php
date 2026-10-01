<?php

namespace PrestaShop\PrestaShop\Adapter\Category\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCategoryIsEnabledHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler\GetCategoryIsEnabledHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoryIsEnabled $query)
    {
    }
}
