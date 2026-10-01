<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Edit Carrier
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\EditCarrierHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private readonly \PrestaShop\PrestaShop\Adapter\File\Uploader\CarrierLogoFileUploader $carrierLogoFileUploader, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Validate\CarrierValidator $carrierValidator, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, private readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\EditCarrierCommand $command): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
