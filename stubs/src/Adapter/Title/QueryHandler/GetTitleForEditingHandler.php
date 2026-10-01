<?php

namespace PrestaShop\PrestaShop\Adapter\Title\QueryHandler;

/**
 * Handles command that gets title for editing
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetTitleForEditingHandler extends \PrestaShop\PrestaShop\Adapter\Title\AbstractTitleHandler implements \PrestaShop\PrestaShop\Core\Domain\Title\QueryHandler\GetTitleForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Query\GetTitleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Title\QueryResult\EditableTitle
    {
    }
}
