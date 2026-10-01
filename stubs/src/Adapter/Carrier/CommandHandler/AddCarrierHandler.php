<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Add new Carrier
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\AddCarrierHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private readonly \PrestaShop\PrestaShop\Adapter\File\Uploader\CarrierLogoFileUploader $carrierLogoFileUploader, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Validate\CarrierValidator $carrierValidator, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\AddCarrierCommand $command): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
