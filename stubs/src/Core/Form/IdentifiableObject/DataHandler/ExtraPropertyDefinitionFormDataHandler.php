<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles form data submission for extra property definitions.
 *
 * The submitted data is nested by card section (field_definition, visibility, labels,
 * validation, advanced), matching ExtraPropertyDefinitionType's sub-form structure. Each
 * section's fields are always present (Symfony Form guarantees this), so no defensive `?? ''`
 * fallback is needed for required fields — only the empty-string to null normalization (via the
 * Elvis operator) for optional string fields.
 *
 * create() dispatches AddExtraPropertyDefinitionCommand (no module_name — always null for BO-created fields).
 * update() dispatches UpdateExtraPropertyDefinitionCommand (structural fields are intentionally excluded).
 *
 * The associations and constraints arrive as builder-row arrays (the mapped row collections'
 * data) and are serialized back into the entry strings / DSL value the commands accept — the
 * inverse of what the form data provider presented. The row form types already validated every
 * row through the same parser/mapper, so serialization cannot fail here on a form-validated
 * submission. Only form_options is edited as raw JSON — the one boundary where JSON decoding
 * belongs; the CQRS commands themselves only ever carry native arrays. Malformed form_options
 * JSON throws instead of being silently dropped — the form's Json constraint normally blocks it
 * before this handler runs (see ExtraPropertyDefinitionAdvancedType), so a throw here only
 * surfaces for programmatic submissions or hook-mutated form data.
 */
class ExtraPropertyDefinitionFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param array<string, mixed> $data
     *
     * @return int
     */
    public function create(array $data): int
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param int $id
     * @param array<string, mixed> $data
     */
    public function update($id, array $data): void
    {
    }
    /**
     * Decodes the JSON object submitted by the form_options textarea.
     *
     * @param string|null $rawValue
     *
     * @return array<string, mixed>|null
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\InvalidExtraPropertyDefinitionException when the value is not valid JSON or does not decode to a JSON object
     */
    protected function parseJsonObject(?string $rawValue): ?array
    {
    }
}
