<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides form data for the extra property definition create / edit form.
 *
 * The data is nested by card section (field_definition, visibility, labels, validation,
 * advanced), matching ExtraPropertyDefinitionType's sub-form structure. The stored association
 * entries and constraints are pre-split into builder-row arrays (one row per entry — see the row
 * presenters), the shape the mapped row collections edit; the data handler serializes them back.
 *
 * getData() dispatches GetExtraPropertyDefinitionForEditing and maps the DTO to form field names.
 * getDefaultData() provides sensible defaults for the creation form.
 */
final class ExtraPropertyDefinitionFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param int $id
     *
     * @return array<string, mixed>
     */
    public function getData($id): array
    {
    }
    /**
     * {@inheritdoc}
     *
     * @return array<string, mixed>
     */
    public function getDefaultData(): array
    {
    }
}
