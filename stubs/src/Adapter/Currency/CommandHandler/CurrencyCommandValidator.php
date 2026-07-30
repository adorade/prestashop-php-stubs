<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Validates that modifications managed via currency commands are valid and respect this domain
 * specific rules (avoid duplicate currencies, remove default currency, ...).
 */
final class CurrencyCommandValidator
{
    /**
     * @param LocaleRepository $localeRepoCLDR
     * @param CurrencyDataProviderInterface $currencyDataProvider
     * @param int $defaultCurrencyId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepoCLDR, \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider, int $defaultCurrencyId)
    {
    }
    /**
     * @param string $isoCode
     *
     * @throws InvalidUnofficialCurrencyException
     */
    public function assertCurrencyIsNotInReference(string $isoCode)
    {
    }
    /**
     * Throws an error if currency is available in the database (soft deleted currencies don't count)
     *
     * @param string $isoCode
     *
     * @throws CurrencyConstraintException
     */
    public function assertCurrencyIsNotAvailableInDatabase(string $isoCode)
    {
    }
    /**
     * Prevents from default currency being disabled.
     *
     * @param EditCurrencyCommand $command
     *
     * @throws CannotDisableDefaultCurrencyException
     */
    public function assertDefaultCurrencyIsNotBeingDisabled(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command)
    {
    }
    /**
     * On each shop there might be different default currency. This function prevents from removing shop association
     * from each shop and checks that the shop is not being disabled as well.
     *
     * @param Currency $currency
     * @param EditCurrencyCommand $command
     *
     * @throws DefaultCurrencyInMultiShopException
     */
    public function assertDefaultCurrencyIsNotBeingRemovedOrDisabledFromShop(\Currency $currency, \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command)
    {
    }
}
