<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\QueryHandler;

/**
 * Defines contract to handle @var GetProductCustomizationFields query
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetProductCustomizationFieldsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Customization\QueryHandler\GetProductCustomizationFieldsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository
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
