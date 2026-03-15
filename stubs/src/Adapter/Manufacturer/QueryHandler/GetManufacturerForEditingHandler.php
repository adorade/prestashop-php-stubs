<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\QueryHandler;

/**
 * Handles query which gets manufacturer for editing
 */
final class GetManufacturerForEditingHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\AbstractManufacturerHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryHandler\GetManufacturerForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForEditing $query)
    {
    }
}
