<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\Comparator;

/**
 * This class saves a cart's products when it's created, you can then ask for the difference
 * that happened on this cart.
 */
class CartProductsComparator
{
    /**
     * @param Cart $cart
     */
    public function __construct(\Cart $cart)
    {
    }
    /**
     * @param array $knownUpdates
     *
     * @return CartProductsComparator
     */
    public function setKnownUpdates(array $knownUpdates): self
    {
    }
    /**
     * Returns a list of products that were strictly updated (not created) compared to the state of the cart
     * when this object was created, it removes the already known modified products provided as argument.
     *
     * @return CartProductUpdate[]
     */
    public function getUpdatedProducts(): array
    {
    }
    /**
     * Returns a list of products that were strictly created (not updated) compared to the state of the cart
     * when this object was created, it removes the already known modified products provided as argument.
     *
     * @return CartProductUpdate[]
     */
    public function getAdditionalProducts(): array
    {
    }
    /**
     * Returns a list of products that were modified (created and/or updated) compared to the state of the cart
     * when this object was created, it removes the already known modified products provided as argument.
     *
     * @return CartProductUpdate[]
     */
    public function getModifiedProducts(): array
    {
    }
}
