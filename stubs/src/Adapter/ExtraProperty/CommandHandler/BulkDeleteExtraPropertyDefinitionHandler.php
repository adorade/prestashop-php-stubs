<?php

namespace PrestaShop\PrestaShop\Adapter\ExtraProperty\CommandHandler;

/**
 * Deletes several core extra property definitions in bulk.
 *
 * Goes through the repository + registry directly (the same guard and unregister call as
 * DeleteExtraPropertyDefinitionHandler) rather than executing that handler from this one —
 * handlers never call other handlers. Per-item ExtraPropertyException failures (e.g.
 * module-owned definitions) are aggregated instead of stopping the batch midway.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteExtraPropertyDefinitionHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler\BulkDeleteExtraPropertyDefinitionHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyRegistryInterface $registry)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\BulkDeleteExtraPropertyDefinitionCommand $command): void
    {
    }
}
