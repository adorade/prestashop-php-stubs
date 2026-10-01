<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Deletes cart in bulk action
 */
class BulkDeleteCartCommand
{
    /**
     * @param int[] $cartIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct(array $cartIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId[]
     */
    public function getCartIds(): array
    {
    }
}
