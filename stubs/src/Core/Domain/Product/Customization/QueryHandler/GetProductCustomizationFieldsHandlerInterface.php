<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\QueryHandler;

interface GetProductCustomizationFieldsHandlerInterface
{
    /**
     * @param GetProductCustomizationFields $query
     *
     * @return CustomizationField[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\Query\GetProductCustomizationFields $query): array;
}
