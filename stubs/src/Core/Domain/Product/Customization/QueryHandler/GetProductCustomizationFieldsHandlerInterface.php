<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\QueryHandler;

interface GetProductCustomizationFieldsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Customization\Query\GetProductCustomizationFields $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Customization\QueryResult\CustomizationField[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\Query\GetProductCustomizationFields $query): array;
}
