<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class AbstractCurrencyHandler is responsible for encapsulating common behavior for legacy currency object model.
 *
 * @internal
 */
abstract class AbstractCurrencyHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected $localeRepoCLDR;
    /**
     * @var \PrestaShop\PrestaShop\Core\Language\LanguageInterface[]
     */
    protected $languages;
    /**
     * @var CurrencyCommandValidator
     */
    protected $validator;
    /**
     * @var \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer
     */
    protected $patternTransformer;
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepoCLDR
     * @param \PrestaShop\PrestaShop\Core\Language\LanguageInterface[] $languages
     * @param CurrencyCommandValidator $validator
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer $patternTransformer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepoCLDR, array $languages, \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\CurrencyCommandValidator $validator, \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer $patternTransformer)
    {
    }
    /**
     * Associations conversion rate to given shop ids.
     *
     * @param \Currency $entity
     * @param array $shopIds
     */
    protected function associateConversionRateToShops(\Currency $entity, array $shopIds)
    {
    }
    /**
     * @param \Currency $entity
     *
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    protected function refreshLocalizedData(\Currency $entity)
    {
    }
    /**
     * @param \Currency $entity
     * @param array $localizedTransformations
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageNotFoundException
     */
    protected function applyPatternTransformations(\Currency $entity, array $localizedTransformations)
    {
    }
    /**
     * @param \Currency $entity
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CannotCreateCurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    protected function addEntity(\Currency $entity, \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand $command)
    {
    }
    /**
     * @param \Currency $entity
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CannotUpdateCurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    protected function updateEntity(\Currency $entity, \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command)
    {
    }
    /**
     * @param int $currencyId
     * @param int $defaultCurrencyId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CannotDeleteDefaultCurrencyException
     */
    protected function assertDefaultCurrencyIsNotBeingRemovedOrDisabled(int $currencyId, int $defaultCurrencyId)
    {
    }
    /**
     * Prevents from removing the currency from any shop context.
     *
     * @param \Currency $currency
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\DefaultCurrencyInMultiShopException
     */
    protected function assertDefaultCurrencyIsNotBeingRemovedOrDisabledFromAnyShop(\Currency $currency)
    {
    }
}
