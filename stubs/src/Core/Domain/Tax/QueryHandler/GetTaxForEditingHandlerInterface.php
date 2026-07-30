<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\QueryHandler;

/**
 * Defines contract for service that gets tax for editing
 */
interface GetTaxForEditingHandlerInterface
{
    /**
     * @param GetTaxForEditing $query
     *
     * @return EditableTax
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Query\GetTaxForEditing $query);
}
