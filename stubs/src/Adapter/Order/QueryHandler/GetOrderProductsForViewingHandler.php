<?php

namespace PrestaShop\PrestaShop\Adapter\Order\QueryHandler;

/**
 * Handles GetOrderProductsForViewing query using legacy object models
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetOrderProductsForViewingHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderProductsForViewingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser, private readonly int $contextLanguageId, private readonly \PrestaShop\PrestaShop\Core\Localization\Locale $locale, private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Module\ModuleHtmlAuthorizationChecker $moduleHtmlAuthorizationChecker)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderProductsForViewing $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderProductsForViewing
    {
    }
}
