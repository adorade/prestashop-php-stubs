<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Allows manipulating context state.
 * This was adapted for specific broken legacy use cases when the previous state of context must be restored after some actions.
 *
 * e.g. order creation from back office.
 *  Legacy requires Context properties (currency, country etc.) instead of using cart properties
 *  so some context props must be changed for a while and then restored to previous state.
 */
final class ContextStateManager
{
    /**
     * @param LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * @return Context
     */
    public function getContext(): \Context
    {
    }
    /**
     * Sets context cart and saves previous value
     *
     * @param Cart|null $cart
     *
     * @return $this
     */
    public function setCart(?\Cart $cart): self
    {
    }
    /**
     * Sets context country and saves previous value
     *
     * @param Country|null $country
     *
     * @return $this
     */
    public function setCountry(?\Country $country): self
    {
    }
    /**
     * Sets context currency and saves previous value
     *
     * @param Currency|null $currency
     *
     * @return $this
     */
    public function setCurrency(?\Currency $currency): self
    {
    }
    /**
     * Sets context language and saves previous value
     *
     * @param Language|null $language
     *
     * @return $this
     */
    public function setLanguage(?\Language $language): self
    {
    }
    /**
     * Sets context customer and saves previous value
     *
     * @param Customer|null $customer
     *
     * @return $this
     */
    public function setCustomer(?\Customer $customer): self
    {
    }
    /**
     * Sets context shop and saves previous value
     *
     * @param Shop $shop
     *
     * @return $this
     *
     * @throws \PrestaShopException
     */
    public function setShop(\Shop $shop): self
    {
    }
    /**
     * Sets context shop and saves previous value
     *
     * @param int $shopContext
     * @param int|null $shopContextId
     *
     * @return $this
     *
     * @throws \PrestaShopException
     */
    public function setShopContext(int $shopContext, ?int $shopContextId = null): self
    {
    }
    /**
     * Restores context to a state before changes
     *
     * @return self
     */
    public function restorePreviousContext(): self
    {
    }
    /**
     * Saves the current overridden fields in the context, allowing you to set new values to the
     * current Context. Next time you call restorePreviousContext the context will be refilled with
     * the values that were saved during this call.
     *
     * This is useful if several services use the ContextStateManager, this way if every service
     * saved the context before modifying it there is no risk of removing previous modifications
     * when you restore the context, because the different states have been stacked.
     *
     * @return $this
     */
    public function saveCurrentContext(): self
    {
    }
    /**
     * Return the stack of modified fields
     * If it's null, no context field has been overridden
     *
     * @return array|null
     */
    public function getContextFieldsStack(): ?array
    {
    }
}
