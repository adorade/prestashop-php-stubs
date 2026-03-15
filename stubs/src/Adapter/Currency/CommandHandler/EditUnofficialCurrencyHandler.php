<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class EditUnofficialCurrencyHandler is responsible for updating unofficial currencies.
 *
 * @internal
 */
final class EditUnofficialCurrencyHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\EditUnofficialCurrencyHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditUnofficialCurrencyCommand $command)
    {
    }
}
