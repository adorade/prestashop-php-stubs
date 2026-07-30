<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Query;

/**
 * Query for getting cart information
 */
class GetCartForOrderCreation
{
    /**
     * @param int $cartId
     *
     * @throws CartConstraintException
     */
    public function __construct(int $cartId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return bool
     */
    public function hideDiscounts(): bool
    {
    }
    /**
     * When hideDiscounts is set to TRUE,
     * Gift products are in a separate line from other products which are charged for
     * The price of any gift products is not included in the overall discounts, total products and cart total
     * Shipping is set to 0 if there is a free_shipping cart rule
     *
     * Otherwise,
     * There is one line per product type, any gift products will be included in the quantity of charged products, but the price of gift products will appear as a discount
     * Shipping has its original price, and if it's free, the shipping value will be added as a discount
     *
     * @param bool $hideDiscounts
     *
     * @return GetCartForOrderCreation
     */
    public function setHideDiscounts(bool $hideDiscounts): self
    {
    }
}
