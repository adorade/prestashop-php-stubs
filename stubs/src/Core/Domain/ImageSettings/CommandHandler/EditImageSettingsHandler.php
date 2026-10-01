<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditImageSettingsHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\EditImageSettingsHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Admin\ImageConfiguration $imageConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\ImageTypeException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\EditImageSettingsCommand $command): void
    {
    }
}
