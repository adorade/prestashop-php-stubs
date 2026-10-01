<?php

namespace PrestaShop\PrestaShop\Adapter\ExtraProperty\QueryHandler;

/**
 * Loads all fields of one extra property definition for the BO edit form.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetExtraPropertyDefinitionForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\QueryHandler\GetExtraPropertyDefinitionForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyDefinitionNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Query\GetExtraPropertyDefinitionForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\QueryResult\EditableExtraPropertyDefinition
    {
    }
}
