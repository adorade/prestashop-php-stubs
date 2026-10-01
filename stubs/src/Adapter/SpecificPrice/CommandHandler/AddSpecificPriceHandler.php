<?php

namespace PrestaShop\PrestaShop\Adapter\SpecificPrice\CommandHandler;

/**
 * @deprecated since 8.0.0 and will be removed in next major version.
 * @see AddSpecificPriceHandler
 */
final class AddSpecificPriceHandler extends \PrestaShop\PrestaShop\Adapter\SpecificPrice\AbstractSpecificPriceHandler implements \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\CommandHandler\AddSpecificPriceHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command\AddSpecificPriceCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\ValueObject\SpecificPriceId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Exception\SpecificPriceConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Exception\SpecificPriceException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command\AddSpecificPriceCommand $command): \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
}
