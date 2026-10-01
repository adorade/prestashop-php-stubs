<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Handles command that bulk delete image types
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteImageTypeHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\BulkDeleteImageTypeHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\BulkDeleteImageTypeCommand $command): void
    {
    }
    protected function buildBulkException(array $caughtExceptions): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\BulkImageTypeException
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId $id
     * @param mixed $command
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\ImageTypeNotFoundException
     */
    protected function handleSingleAction(mixed $id, mixed $command): void
    {
    }
    protected function supports($id): bool
    {
    }
}
