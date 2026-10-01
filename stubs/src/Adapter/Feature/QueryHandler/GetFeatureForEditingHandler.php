<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\QueryHandler;

/**
 * Handles get feature for editing query.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetFeatureForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\QueryHandler\GetFeatureForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Query\GetFeatureForEditing $query)
    {
    }
}
