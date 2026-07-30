<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Trait to help build the bulk delete action
 */
trait BulkDeleteActionTrait
{
    /**
     * @param string $bulkDeleteRouteName
     * @param array $options
     *
     * @return BulkActionInterface
     */
    protected function buildBulkDeleteAction(string $bulkDeleteRouteName, array $options = [])
    {
    }
    /**
     * Shortcut method to translate text.
     *
     * @param string $id
     * @param array $options
     * @param string $domain
     *
     * @return string
     */
    abstract protected function trans($id, array $options, $domain);
}
