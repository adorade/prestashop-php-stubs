<?php

namespace PrestaShop\PrestaShop\Adapter\ExtraProperty\CommandHandler;

/**
 * Creates a new core extra property definition via the registry.
 *
 * Delegates to ExtraPropertyRegistryInterface::register() which creates the definition
 * row (shop association included — the definition is the single input carrying it) and
 * the physical SQL column, returning the new row id directly.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddExtraPropertyDefinitionHandler implements \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler\AddExtraPropertyDefinitionHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyRegistryInterface $registry)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyRegistrationFailureException carries the failure reason as its code
     *                                                   and the core exception as previous
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\AddExtraPropertyDefinitionCommand $command): \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
    {
    }
}
