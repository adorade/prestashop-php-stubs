<?php

namespace PrestaShop\PrestaShop\Adapter\State\QueryHandler;

/**
 * Handles command that gets state for editing
 *
 * @internal
 */
class GetStateForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\State\QueryHandler\GetStateForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Query\GetStateForEditing $query): \PrestaShop\PrestaShop\Core\Domain\State\QueryResult\EditableState
    {
    }
}
