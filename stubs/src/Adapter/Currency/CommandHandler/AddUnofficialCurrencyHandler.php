<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Adds a new unofficial currency.
 *
 * @internal
 */
final class AddUnofficialCurrencyHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\AddUnofficialCurrencyHandlerInterface
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
     * @throws CurrencyException
     * @throws CurrencyConstraintException
     * @throws InvalidUnofficialCurrencyException
     * @throws LanguageNotFoundException
     * @throws LocalizationException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddUnofficialCurrencyCommand $command)
    {
    }
}
