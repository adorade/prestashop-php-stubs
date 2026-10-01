<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class EditOfficialCurrencyHandler is responsible for updating currencies.
 *
 * @internal
 */
final class EditOfficialCurrencyHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\EditCurrencyHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CannotDisableDefaultCurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CannotUpdateCurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\DefaultCurrencyInMultiShopException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command)
    {
    }
}
