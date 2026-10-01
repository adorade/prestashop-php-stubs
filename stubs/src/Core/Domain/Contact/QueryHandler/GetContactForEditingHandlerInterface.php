<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\QueryHandler;

/**
 * Interface GetContactForEditingHandlerInterface defines contract for GetContactForEditingHandler
 */
interface GetContactForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Contact\Query\GetContactForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Contact\QueryResult\EditableContact
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Query\GetContactForEditing $query);
}
