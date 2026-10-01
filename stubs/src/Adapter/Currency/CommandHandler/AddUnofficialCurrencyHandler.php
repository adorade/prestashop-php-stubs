<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Adds a new unofficial currency.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddUnofficialCurrencyHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\AddUnofficialCurrencyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepoCLDR
     * @param \PrestaShop\PrestaShop\Core\Language\LanguageInterface[] $languages
     * @param CurrencyCommandValidator $validator
     * @param \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepoCLDR, array $languages, \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\CurrencyCommandValidator $validator, \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider, \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer $patternTransformer)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CannotCreateCurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\InvalidUnofficialCurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddUnofficialCurrencyCommand $command)
    {
    }
}
