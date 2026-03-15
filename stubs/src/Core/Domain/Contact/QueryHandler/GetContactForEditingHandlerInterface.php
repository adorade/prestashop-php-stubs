<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\QueryHandler;

/**
 * Interface GetContactForEditingHandlerInterface defines contract for GetContactForEditingHandler
 */
interface GetContactForEditingHandlerInterface
{
    /**
     * @param GetContactForEditing $query
     *
     * @return EditableContact
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Query\GetContactForEditing $query);
}
