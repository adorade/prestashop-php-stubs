<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

/**
 * Class VoucherGenerator is responsible of generating a voucher for a customer
 * for an order refund.
 */
class VoucherGenerator
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale $locale
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Locale $locale, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \Order $order
     * @param float $voucherAmount
     * @param string $currencyIsoCode
     * @param bool $isTaxIncluded
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function generateVoucher(\Order $order, float $voucherAmount, string $currencyIsoCode, bool $isTaxIncluded)
    {
    }
}
