<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditImageTypeHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\EditImageTypeHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\ImageTypeException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\EditImageTypeCommand $command): void
    {
    }
}
