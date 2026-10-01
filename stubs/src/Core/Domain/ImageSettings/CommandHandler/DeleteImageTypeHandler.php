<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Handles command that delete image type
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteImageTypeHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\DeleteImageTypeHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\DeleteImageTypeCommand $command): void
    {
    }
}
