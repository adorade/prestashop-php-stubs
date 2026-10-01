<?php

namespace PrestaShop\PrestaShop\Adapter\ExtraProperty\CommandHandler;

/**
 * Updates editable metadata fields of a core extra property definition.
 *
 * Structural fields (entity_name, property_name, type, scope) are preserved from the
 * existing row. nullable, size, enumValues and sql_index may be overridden, but only
 * non-destructive changes are accepted — the registry refuses the write otherwise
 * (see ExtraPropertyRegistry::hasStorageChanges()).
 *
 * Module-owned definitions are a deliberate carve-out: they accept exactly one
 * modification — the shop association (setAssociatedShopIds()) — because the module is
 * the source of truth for everything else while the merchant remains in charge of which
 * of their shops the property applies to. Any other setter used together with a
 * module-owned id throws ProtectedModuleExtraPropertyDefinitionException.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateExtraPropertyDefinitionHandler implements \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler\UpdateExtraPropertyDefinitionHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\UpdateExtraPropertyDefinitionCommand $command): void
    {
    }
}
