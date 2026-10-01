<?php

namespace PrestaShop\PrestaShop\Adapter\Order\QueryHandler;

/**
 * Handles GetOrderProductsForViewing query using legacy object models
 */
final class GetOrderProductsForViewingHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderProductsForViewingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser, int $contextLanguageId, \PrestaShop\PrestaShop\Core\Localization\Locale $locale)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderProductsForViewing $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderProductsForViewing
    {
    }
}
