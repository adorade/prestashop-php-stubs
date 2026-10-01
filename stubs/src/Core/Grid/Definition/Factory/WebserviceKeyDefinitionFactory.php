<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class WebserviceKeyDefinitionFactory is responsible for creating grid definition for Webservice grid.
 */
final class WebserviceKeyDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'webservice_key';
}
