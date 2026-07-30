<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\QueryHandler;

/**
 * Defines contract to handle @var GetProductCustomizationFields query
 */
final class GetProductCustomizationFieldsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Customization\QueryHandler\GetProductCustomizationFieldsHandlerInterface
{
    /**
     * @param CustomizationFieldRepository $customizationFieldRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\Query\GetProductCustomizationFields $query): array
    {
    }
}
