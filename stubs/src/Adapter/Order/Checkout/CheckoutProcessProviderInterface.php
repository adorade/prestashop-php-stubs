<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Checkout;

/**
 * Contract for modules that provide their own checkout process.
 * If exactly one enabled provider is returned by hooked modules, its checkout
 * process replaces the native one. Otherwise, we falls back to the
 * native checkout.
 */
interface CheckoutProcessProviderInterface
{
    /**
     * Indicates whether the module checkout can be used.
     */
    public function isEnabled(): bool;
    /**
     * Builds the checkout process for the current customer session.
     */
    public function buildCheckoutProcess(\CheckoutSession $session, \PrestaShopBundle\Translation\TranslatorComponent $translator): \CheckoutProcess;
}
