<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command;

/**
 * Updates editable metadata for a core extra property definition.
 *
 * Structural fields (entity_name, property_name, type, scope) are intentionally absent —
 * changing them implies moving storage tables / converting data, which is not supported
 * without unregister + register.
 *
 * nullable, size, enumValues and sqlIndex ARE editable, but only in the non-destructive
 * direction (relaxing nullable, increasing size, adding enum values, changing the index
 * strategy) — the registry (ExtraPropertyRegistry::hasStorageChanges()) refuses any
 * destructive attempt and the write simply fails.
 *
 * Use a builder pattern: construct with the id, then call setters as needed.
 */
class UpdateExtraPropertyDefinitionCommand
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
     */
    protected \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId $id;
    /**
     * @var bool|null
     */
    protected ?bool $displayFront = null;
    /**
     * @var bool|null
     */
    protected ?bool $required = null;
    /**
     * @var bool|null
     */
    protected ?bool $nullable = null;
    /**
     * @var int|null
     */
    protected ?int $size = null;
    /**
     * @var list<string>|null
     */
    protected ?array $enumValues = null;
    /**
     * @var \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex|null
     */
    protected ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex = null;
    /**
     * @var string|null
     */
    protected ?string $labelWording = null;
    /**
     * @var string|null
     */
    protected ?string $labelDomain = null;
    /**
     * @var string|null
     */
    protected ?string $descriptionWording = null;
    /**
     * @var string|null
     */
    protected ?string $descriptionDomain = null;
    /**
     * Null = never set (untouched); [] = explicit clear. Parsed from the DSL input, see
     * setConstraints().
     *
     * @var list<\Symfony\Component\Validator\Constraint>|null
     */
    protected ?array $constraints = null;
    /**
     * @var string|null
     */
    protected ?string $formType = null;
    /**
     * @var array<string, mixed>|null
     */
    protected ?array $formOptions = null;
    /**
     * @var list<string>|null
     */
    protected ?array $associatedForms = null;
    /**
     * @var list<string>|null
     */
    protected ?array $associatedGrids = null;
    /**
     * @var list<string>|null
     */
    protected ?array $associatedApis = null;
    /**
     * Null = never set; [] = explicit revert to fallback (see setAssociatedShopIds()).
     *
     * @var list<int>|null
     */
    protected ?array $associatedShopIds = null;
    /**
     * @param int $id
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
     */
    public function getId(): \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
    {
    }
    /**
     * @return bool|null
     */
    public function getDisplayFront(): ?bool
    {
    }
    /**
     * @param bool $displayFront
     *
     * @return self
     */
    public function setDisplayFront(bool $displayFront): self
    {
    }
    /**
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
    }
    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required): self
    {
    }
    /**
     * @return bool|null
     */
    public function getNullable(): ?bool
    {
    }
    /**
     * @param bool $nullable
     *
     * @return self
     */
    public function setNullable(bool $nullable): self
    {
    }
    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
    }
    /**
     * @return list<string>|null
     */
    public function getEnumValues(): ?array
    {
    }
    /**
     * @param list<string>|null $enumValues
     *
     * @return self
     */
    public function setEnumValues(?array $enumValues): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex|null
     */
    public function getSqlIndex(): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex
     *
     * @return self
     */
    public function setSqlIndex(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertySqlIndex $sqlIndex): self
    {
    }
    /**
     * @return string|null
     */
    public function getLabelWording(): ?string
    {
    }
    /**
     * @param string|null $labelWording
     *
     * @return self
     */
    public function setLabelWording(?string $labelWording): self
    {
    }
    /**
     * @return string|null
     */
    public function getLabelDomain(): ?string
    {
    }
    /**
     * @param string|null $labelDomain
     *
     * @return self
     */
    public function setLabelDomain(?string $labelDomain): self
    {
    }
    /**
     * @return string|null
     */
    public function getDescriptionWording(): ?string
    {
    }
    /**
     * @param string|null $descriptionWording
     *
     * @return self
     */
    public function setDescriptionWording(?string $descriptionWording): self
    {
    }
    /**
     * @return string|null
     */
    public function getDescriptionDomain(): ?string
    {
    }
    /**
     * @param string|null $descriptionDomain
     *
     * @return self
     */
    public function setDescriptionDomain(?string $descriptionDomain): self
    {
    }
    /**
     * @return list<\Symfony\Component\Validator\Constraint>|null Null = never set (constraints untouched), [] = every constraint
     *                               removed, otherwise the replacement constraints
     */
    public function getConstraints(): ?array
    {
    }
    /**
     * @param string|null $constraints Validation constraints in the extra property constraint DSL
     *                                 (one per line or comma-separated, e.g. "NotBlank\nLength(min: 2, max: 64)");
     *                                 null or empty removes every constraint
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyConstraintException when the DSL cannot be parsed
     */
    public function setConstraints(?string $constraints): self
    {
    }
    /**
     * @return string|null
     */
    public function getFormType(): ?string
    {
    }
    /**
     * @param string|null $formType
     *
     * @return self
     */
    public function setFormType(?string $formType): self
    {
    }
    /**
     * @return array<string, mixed>|null
     */
    public function getFormOptions(): ?array
    {
    }
    /**
     * @param array<string, mixed>|null $formOptions
     *
     * @return self
     */
    public function setFormOptions(?array $formOptions): self
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedForms(): ?array
    {
    }
    /**
     * @param list<string>|null $associatedForms
     *
     * @return self
     */
    public function setAssociatedForms(?array $associatedForms): self
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedGrids(): ?array
    {
    }
    /**
     * @param list<string>|null $associatedGrids
     *
     * @return self
     */
    public function setAssociatedGrids(?array $associatedGrids): self
    {
    }
    /**
     * @return list<string>|null
     */
    public function getAssociatedApis(): ?array
    {
    }
    /**
     * @param list<string>|null $associatedApis
     *
     * @return self
     */
    public function setAssociatedApis(?array $associatedApis): self
    {
    }
    /**
     * Null = never set (association untouched); [] = explicit revert to the fallback
     * behavior (core-owned: all shops, module-owned: the module's enabled shops).
     *
     * @return list<int>|null
     */
    public function getAssociatedShopIds(): ?array
    {
    }
    /**
     * The only modification accepted on a module-owned definition — every other setter
     * used together with a module-owned id makes the handler throw
     * ProtectedModuleExtraPropertyDefinitionException.
     *
     * @param list<int> $associatedShopIds Empty = revert to the fallback behavior
     *
     * @return self
     */
    public function setAssociatedShopIds(array $associatedShopIds): self
    {
    }
}
