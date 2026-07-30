<?php

namespace PrestaShop\PrestaShop\Adapter\SpecificPrice\CommandHandler;

/**
 * @deprecated since 8.0.0 and will be removed in next major version.
 * @see AddSpecificPriceHandler
 */
final class AddSpecificPriceHandler extends \PrestaShop\PrestaShop\Adapter\SpecificPrice\AbstractSpecificPriceHandler implements \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\CommandHandler\AddSpecificPriceHandlerInterface
{
    /**
     * @param AddSpecificPriceCommand $command
     *
     * @return SpecificPriceId
     *
     * @throws SpecificPriceConstraintException
     * @throws SpecificPriceException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command\AddSpecificPriceCommand $command): \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
}
