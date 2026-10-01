<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\QueryResult;

/**
 * Read-only DTO carrying all data for an extra property definition edit form.
 *
 * Structural fields (entity_name, property_name, type, scope) are included for display
 * purposes in the edit form (shown as read-only / disabled) — they cannot be changed without
 * unregister + register. nullable, size, enumValues and sqlIndex are included too but ARE
 * editable (non-destructively) via UpdateExtraPropertyDefinitionCommand.
 */
class EditableExtraPropertyDefinition
{
    /**
     * @param int $id
     * @param string $entityName
     * @param string|null $moduleName Null for core fields; non-null = module-owned (read-only)
     * @param string $propertyName
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex
     * @param bool $nullable
     * @param int|null $size Varchar size for string fields
     * @param int|float|string|bool|null $defaultValue
     * @param list<string>|null $enumValues Allowed values for CHOICE type
     * @param bool $displayFront
     * @param bool $required
     * @param string|null $labelWording
     * @param string|null $labelDomain
     * @param string|null $descriptionWording
     * @param string|null $descriptionDomain
     * @param string|null $constraints Validation constraints in the extra property DSL (canonical render, one constraint per line); null = no validation
     * @param string|null $formType
     * @param array<string, mixed>|null $formOptions
     * @param list<string>|null $associatedForms
     * @param list<string>|null $associatedGrids
     * @param list<string>|null $associatedApis
     * @param list<int>|null $associatedShopIds Explicit shop restriction; null = fallback behavior (core-owned: all shops, module-owned: the module's enabled shops)
     */
    public function __construct(protected readonly int $id, protected readonly string $entityName, protected readonly ?string $moduleName, protected readonly string $propertyName, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex, protected readonly bool $nullable, protected readonly ?int $size, protected readonly int|float|string|bool|null $defaultValue, protected readonly ?array $enumValues, protected readonly bool $displayFront, protected readonly bool $required, protected readonly ?string $labelWording, protected readonly ?string $labelDomain, protected readonly ?string $descriptionWording, protected readonly ?string $descriptionDomain, protected readonly ?string $constraints, protected readonly ?string $formType, protected readonly ?array $formOptions, protected readonly ?array $associatedForms, protected readonly ?array $associatedGrids, protected readonly ?array $associatedApis, protected readonly ?array $associatedShopIds = null)
    {
    }
    public function getId(): int
    {
    }
    public function getEntityName(): string
    {
    }
    /**
     * Returns null for core fields. Non-null means the definition is module-owned (read-only).
     */
    public function getModuleName(): ?string
    {
    }
    public function getPropertyName(): string
    {
    }
    public function getType(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType
    {
    }
    public function getScope(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope
    {
    }
    public function getSqlIndex(): \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex
    {
    }
    public function isNullable(): bool
    {
    }
    public function getSize(): ?int
    {
    }
    public function getDefaultValue(): int|float|string|bool|null
    {
    }
    /**
     * @return list<string>|null
     */
    public function getEnumValues(): ?array
    {
    }
    public function isDisplayFront(): bool
    {
    }
    public function isRequired(): bool
    {
    }
    public function getLabelWording(): ?string
    {
    }
    public function getLabelDomain(): ?string
    {
    }
    public function getDescriptionWording(): ?string
    {
    }
    public function getDescriptionDomain(): ?string
    {
    }
    /**
     * Validation constraints in the extra property DSL (canonical render, one constraint per line,
     * e.g. "NotBlank\nLength(min: 2, max: 64)"), the same format the Add/Update commands accept.
     * Null = no validation.
     */
    public function getConstraints(): ?string
    {
    }
    public function getFormType(): ?string
    {
    }
    /**
     * @return array<string, mixed>|null
     */
    public function getFormOptions(): ?array
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedForms(): ?array
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedGrids(): ?array
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedApis(): ?array
    {
    }
    /**
     * Explicit shop restriction; null = fallback behavior (core-owned: all shops,
     * module-owned: the module's enabled shops).
     *
     * @return list<int>|null
     */
    public function getAssociatedShopIds(): ?array
    {
    }
    /**
     * Returns true when the definition is owned by a module and cannot be modified via the BO UI
     * — except for its shop association, the single field the Update command accepts on it.
     */
    public function isModuleOwned(): bool
    {
    }
}
