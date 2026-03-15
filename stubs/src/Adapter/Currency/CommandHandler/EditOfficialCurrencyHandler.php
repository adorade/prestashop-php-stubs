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
     * @throws CannotDisableDefaultCurrencyException
     * @throws CannotUpdateCurrencyException
     * @throws CurrencyException
     * @throws CurrencyNotFoundException
     * @throws DefaultCurrencyInMultiShopException
     * @throws LocalizationException
     * @throws LanguageNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command)
    {
    }
}
