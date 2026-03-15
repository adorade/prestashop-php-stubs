<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Trait to help build the grid single line delete action
 */
trait DeleteActionTrait
{
    protected function buildDeleteAction(string $deleteRouteName, string $deleteRouteParamName, string $deleteRouteParamField, string $method = 'POST', array $extraRouteParams = [], array $options = [], string $actionLabel = null): \PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionInterface
    {
    }
    /**
     * Shortcut method to translate text.
     */
    abstract protected function trans($id, array $options, $domain);
}
