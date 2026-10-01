<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart\Provider;

/**
 * In-memory cart product provider for unit tests. Accepts pre-configured arrays
 * of CartProduct keyed by cartId.
 *
 * @experimental
 */
class MockCartProductProvider implements \PrestaShop\PrestaShop\Core\Pricing\Cart\Provider\CartProductProviderInterface
{
    /**
     * @param array<int, CartProduct[]> $cartProductsMap keyed by cartId
     */
    public function __construct(protected readonly array $cartProductsMap = [])
    {
    }
    /**
     * @return CartProduct[]
     */
    public function getCartProducts(int $cartId): array
    {
    }
}
