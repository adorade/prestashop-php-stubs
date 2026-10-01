<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\Validate;

/**
 * Validates alias field using legacy object model
 */
class AliasValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * This method is specific for alias creation only.
     *
     * @param \Alias $alias
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function validate(\Alias $alias): void
    {
    }
}
