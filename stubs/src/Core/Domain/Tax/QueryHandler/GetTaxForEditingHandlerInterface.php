<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\QueryHandler;

/**
 * Defines contract for service that gets tax for editing
 */
interface GetTaxForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tax\Query\GetTaxForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Tax\QueryResult\EditableTax
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Query\GetTaxForEditing $query);
}
