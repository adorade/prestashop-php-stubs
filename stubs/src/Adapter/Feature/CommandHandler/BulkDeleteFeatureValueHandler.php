<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteFeatureValueHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\BulkDeleteFeatureValueHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\BulkDeleteFeatureValueCommand $command): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $id
     * @param mixed $command
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
