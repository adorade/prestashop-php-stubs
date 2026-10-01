<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

/**
 * Handles country deletion
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteCountryHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\DeleteCountryHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\DeleteCountryCommand $command): void
    {
    }
}
