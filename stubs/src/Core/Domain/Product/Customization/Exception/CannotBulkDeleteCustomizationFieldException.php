<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception;

/**
 * Thrown when customization field deletion fails in bulk action
 */
class CannotBulkDeleteCustomizationFieldException extends \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductException
{
    /**
     * @param array $customizationFieldIds
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(array $customizationFieldIds, $message = '', $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getCustomizationFieldIds(): array
    {
    }
}
