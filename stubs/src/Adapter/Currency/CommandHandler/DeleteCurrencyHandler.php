<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class DeleteCurrencyHandler is responsible for handling the deletion of currency logic.
 *
 * @internal
 */
final class DeleteCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\DeleteCurrencyHandlerInterface
{
    /**
     * @param int $defaultCurrencyId
     */
    public function __construct($defaultCurrencyId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CurrencyException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\DeleteCurrencyCommand $command)
    {
    }
}
