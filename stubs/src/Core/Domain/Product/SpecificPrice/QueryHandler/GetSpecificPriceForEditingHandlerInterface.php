<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryHandler;

interface GetSpecificPriceForEditingHandlerInterface
{
    /**
     * @param GetSpecificPriceForEditing $query
     *
     * @return SpecificPriceForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query\GetSpecificPriceForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\SpecificPriceForEditing;
}
