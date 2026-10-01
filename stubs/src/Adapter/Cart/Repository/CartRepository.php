<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\Repository;

class CartRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * Retrieve Cart by CartId.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId
     *
     * @return \Cart
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId): \Cart
    {
    }
    /**
     * Delete Cart by CartId.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId): void
    {
    }
}
