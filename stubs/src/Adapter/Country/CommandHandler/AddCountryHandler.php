<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

/**
 * Handles creation of country and address format for it
 */
class AddCountryHandler extends \PrestaShop\PrestaShop\Adapter\Country\AbstractCountryHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\AddCountryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CannotAddCountryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\AddCountryCommand $command): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
}
