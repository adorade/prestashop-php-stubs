<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart\Provider;

/**
 * Reads cart product lines from the ps_cart_product table.
 *
 * @experimental
 */
class DatabaseCartProductProvider implements \PrestaShop\PrestaShop\Core\Pricing\Cart\Provider\CartProductProviderInterface
{
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix)
    {
    }
    /**
     * @return CartProduct[]
     */
    public function getCartProducts(int $cartId): array
    {
    }
}
