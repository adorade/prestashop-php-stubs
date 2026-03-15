<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\QueryHandler;

/**
 * Handles query which gets supplier for editing
 */
final class GetSupplierForEditingHandler extends \PrestaShop\PrestaShop\Adapter\Supplier\AbstractSupplierHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\QueryHandler\GetSupplierForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Query\GetSupplierForEditing $query)
    {
    }
}
