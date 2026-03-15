<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Exception;

/**
 * Thrown when minimal product
 */
class MinimalQuantityException extends \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException
{
    /**
     * @var int
     */
    protected $minimalQuantity;
    /**
     * @param string $message
     * @param int $minimalQuantity
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message, int $minimalQuantity, int $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return int
     */
    public function getMinimalQuantity(): int
    {
    }
}
