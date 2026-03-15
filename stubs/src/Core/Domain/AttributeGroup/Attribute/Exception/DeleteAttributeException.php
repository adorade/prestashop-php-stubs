<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception;

/**
 * Is thrown when attribute deletion fails
 */
class DeleteAttributeException extends \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeException
{
    /**
     * When fails to delete single attribute
     */
    public const FAILED_DELETE = 10;
    /**
     * When deleting fails in bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
