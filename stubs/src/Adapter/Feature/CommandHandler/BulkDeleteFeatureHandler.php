<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteFeatureHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\BulkDeleteFeatureHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\BulkDeleteFeatureCommand $command): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $id
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\Command\BulkDeleteFeatureCommand $command
     *
     * @return void
     */
    protected function handleSingleAction(mixed $id, mixed $command): void
    {
    }
    /**
     * {@inheritDoc}
     */
    protected function buildBulkException(array $caughtExceptions): \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
    {
    }
    /**
     * {@inheritDoc}
     */
    protected function supports($id): bool
    {
    }
}
