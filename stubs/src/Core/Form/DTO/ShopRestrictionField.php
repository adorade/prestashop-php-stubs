<?php

namespace PrestaShop\PrestaShop\Core\Form\DTO;

/**
 * Holds the field name for which the multi-store restriction checkbox has been checked or unchecked and the status if it
 * was restricted or not.
 */
class ShopRestrictionField
{
    /**
     * @param string $fieldName
     * @param bool $isRestrictedToContextShop
     */
    public function __construct($fieldName, $isRestrictedToContextShop)
    {
    }
    /**
     * @return string
     */
    public function getFieldName()
    {
    }
    /**
     * @return bool
     */
    public function isRestrictedToContextShop()
    {
    }
}
