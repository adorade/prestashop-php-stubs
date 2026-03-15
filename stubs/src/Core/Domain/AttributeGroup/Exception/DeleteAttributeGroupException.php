<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception;

/**
 * Is thrown when deleting attribute group fails
 */
class DeleteAttributeGroupException extends \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupException
{
    /**
     * When trying to delete single attribute group fails
     */
    public const FAILED_DELETE = 10;
    /**
     * When deleting in bulk action fails
     */
    public const FAILED_BULK_DELETE = 20;
}
