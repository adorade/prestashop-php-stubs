<?php

namespace PrestaShop\PrestaShop\Adapter\ExtraProperty\CommandHandler;

/**
 * Deletes a core extra property definition and optionally its physical SQL column.
 *
 * Delegates to ExtraPropertyRegistryInterface::unregister() which handles
 * the column drop (when requested) and cache invalidation.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteExtraPropertyDefinitionHandler implements \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler\DeleteExtraPropertyDefinitionHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyRegistryInterface $registry)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyDefinitionNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ProtectedModuleExtraPropertyDefinitionException
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyRegistrationFailureException carries the failure reason as its code
     *                                                   and the core exception as previous
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\DeleteExtraPropertyDefinitionCommand $command): void
    {
    }
}
