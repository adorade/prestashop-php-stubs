<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Adds a new currency.
 *
 * @internal
 */
final class AddOfficialCurrencyHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\AddCurrencyHandlerInterface
{
    /**
     * @param LocaleRepository $localeRepoCLDR
     * @param LanguageInterface[] $languages
     * @param CurrencyCommandValidator $validator
     * @param CurrencyDataProviderInterface $currencyDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepoCLDR, array $languages, \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\CurrencyCommandValidator $validator, \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider, \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer $patternTransformer)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CannotCreateCurrencyException
     * @throws CurrencyConstraintException
     * @throws CurrencyException
     * @throws CurrencyNotFoundException
     * @throws LocalizationException
     * @throws LanguageNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand $command)
    {
    }
}
