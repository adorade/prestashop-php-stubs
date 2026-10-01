<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Handles @see AddImageTypeCommand
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddImageTypeHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\AddImageTypeHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\AddImageTypeCommand $command): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId
    {
    }
}
