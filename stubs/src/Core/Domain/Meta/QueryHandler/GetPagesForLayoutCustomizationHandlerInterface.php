<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\QueryHandler;

/**
 * Interface GetMetaPagesHandlerInterface.
 */
interface GetPagesForLayoutCustomizationHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Meta\Query\GetPagesForLayoutCustomization $query
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Query\GetPagesForLayoutCustomization $query);
}
