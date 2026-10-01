<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Checkout;

/**
 * Resolves the checkout process provided by modules through the checkout hook.
 */
class CheckoutProcessProviderResolver
{
    /**
     * Returns the checkout process provided by modules when exactly one valid provider is available,
     * or null to keep the native checkout.
     *
     * @param \CheckoutSession $session
     * @param \PrestaShopBundle\Translation\TranslatorComponent $translator
     *
     * @return \CheckoutProcess|null
     */
    public function resolve(\CheckoutSession $session, \PrestaShopBundle\Translation\TranslatorComponent $translator): ?\CheckoutProcess
    {
    }
    /**
     * @return array<string, CheckoutProcessProviderInterface>
     */
    protected function getValidProviders(): array
    {
    }
}
