<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

final class ShipmentGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    public const GRID_ID = 'shipment';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, private \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext)
    {
    }
}
