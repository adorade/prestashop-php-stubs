<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class AuthorizedApplicationGridDefinitionFactory is responsible for creating new instance of Authorized Application grid definition.
 *
 * @experimental
 */
final class AuthorizedApplicationGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'authorized_application';
}
