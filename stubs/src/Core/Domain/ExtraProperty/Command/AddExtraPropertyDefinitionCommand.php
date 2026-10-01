<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command;

/**
 * Registers a new core extra property definition (module_name = null).
 *
 * Structural fields (entity_name, property_name, type, scope, size, sql_index) are immutable
 * once created. Only label, display, and validation metadata can be changed afterwards via
 * UpdateExtraPropertyDefinitionCommand.
 *
 * Inputs are scalars so the command can be built from any serialized payload (Admin API): the
 * validation constraints are given in the extra property constraint DSL and parsed here, so
 * getConstraints() already hands Symfony Constraint objects to the handler.
 */
class AddExtraPropertyDefinitionCommand
{
    /**
     * Parsed from the DSL input (see getConstraints()).
     *
     * @var list<\Symfony\Component\Validator\Constraint>|null
     */
    protected readonly ?array $constraints;
    /**
     * @param string $entityName Entity table name (e.g. 'product', 'customer')
     * @param string $propertyName Property identifier (e.g. 'internal_code')
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex
     * @param bool $displayFront Whether to include in FO presenters
     * @param bool $required Whether the field is marked required in the BO form and in the Admin API (OpenAPI) schema
     * @param bool $nullable Whether the storage column allows NULL
     * @param int|null $size Varchar size for string type (null → 255)
     * @param int|float|string|bool|null $defaultValue SQL DEFAULT clause value, carried with its scalar type (an Admin API JSON payload legitimately sends int/float/bool)
     * @param list<string>|null $enumValues Allowed values for CHOICE type
     * @param string|null $labelWording i18n wording for the BO label (required when associated_forms or associated_grids)
     * @param string|null $labelDomain Translation domain for the label
     * @param string|null $descriptionWording i18n wording for the BO description
     * @param string|null $descriptionDomain Translation domain for the description
     * @param string|null $constraints Validation constraints applied to each value before persistence, in the extra property constraint DSL (one per line or comma-separated, e.g. "NotBlank\nLength(min: 2, max: 64)"); null/empty = no validation
     * @param string|null $formType Symfony form type FQCN override
     * @param array<string, mixed>|null $formOptions Extra options for the Symfony form type
     * @param list<string>|null $associatedForms Form placement entries (e.g. "product:reference:after")
     * @param list<string>|null $associatedGrids Grid placement entries (e.g. "product:reference:after")
     * @param list<string>|null $associatedApis Admin API placement entries (e.g. "/products:GET")
     * @param list<int>|null $associatedShopIds Shops the definition is restricted to; null/empty = available on all shops
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyConstraintException when the constraints DSL cannot be parsed
     */
    public function __construct(protected readonly string $entityName, protected readonly string $propertyName, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type = \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType::STRING, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope = \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope::COMMON, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex = \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex::NONE, protected readonly bool $displayFront = false, protected readonly bool $required = false, protected readonly bool $nullable = true, protected readonly ?int $size = null, protected readonly int|float|string|bool|null $defaultValue = null, protected readonly ?array $enumValues = null, protected readonly ?string $labelWording = null, protected readonly ?string $labelDomain = null, protected readonly ?string $descriptionWording = null, protected readonly ?string $descriptionDomain = null, ?string $constraints = null, protected readonly ?string $formType = null, protected readonly ?array $formOptions = null, protected readonly ?array $associatedForms = null, protected readonly ?array $associatedGrids = null, protected readonly ?array $associatedApis = null, protected readonly ?array $associatedShopIds = null)
    {
    }
    public function getEntityName(): string
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
    public function isDisplayFront(): bool
    {
    }
    public function isRequired(): bool
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
     * The constraints parsed from the DSL input; null = no validation.
     *
     * @return list<\Symfony\Component\Validator\Constraint>|null
     */
    public function getConstraints(): ?array
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
     * @return list<int>|null
     */
    public function getAssociatedShopIds(): ?array
    {
    }
}
