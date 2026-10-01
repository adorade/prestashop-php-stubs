<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Validation;

/**
 * Validates extra property values against the Symfony constraints declared on their definitions.
 *
 * Centralizes validation so that ObjectModel, BO form handlers and API integrations all use the same rules.
 * Value validation delegates to the Symfony Validator ($validator->validate($value, $constraints)). For the array
 * shape forms/API always use (LANG = [id_lang|locale => value], SHOP = [id_shop => value]) the value is validated
 * AS-IS: whole-array constraints (e.g. DefaultLanguage) see the array, per-language rules use Symfony's Assert\All.
 * The exception is an ObjectModel loaded WITH a langId, which exposes a LANG value as a single scalar — handled in
 * validateValue(). The batch validate() re-bases each definition's violation paths under "<module>.<property>" so
 * the result is unambiguous. Structural checks (isTableOrIdentifier, isModuleName) use pure regex.
 *
 * Validation is opt-in: a definition with no constraints yields no violations (the storage column type is then the
 * only guard, like any optional field). Requiredness is a constraint too — a module passes Assert\NotBlank when it
 * wants a value to be mandatory.
 *
 * The Symfony validator is a required dependency, available in every container that runs this service: the three
 * Symfony kernels, and the front-office legacy container where it is hand-wired by ValidatorBuilderExtension.
 */
class ExtraPropertyValidator implements \PrestaShop\PrestaShop\Core\ExtraProperty\Validation\ExtraPropertyValidatorInterface
{
    public function __construct(protected readonly \Symfony\Component\Validator\Validator\ValidatorInterface $validator)
    {
    }
    /**
     * Checks if a value is a valid SQL table/identifier token:
     * 1–64 characters (MySQL identifier limit), [a-zA-Z0-9_-] only.
     *
     * Static (not part of the interface): called by the ExtraPropertyDefinition
     * constructor, which cannot receive injected services.
     */
    public static function isTableOrIdentifier(string $value): bool
    {
    }
    /**
     * Checks if a value is a valid module technical name.
     *
     * Static (not part of the interface): called by the ExtraPropertyDefinition
     * constructor, which cannot receive injected services.
     */
    public static function isModuleName(string $value): bool
    {
    }
    /**
     * Whether a text controlled by a definition author (label/description wording, enum
     * literals, choice labels, constraint messages) is safe to display to other employees:
     * no "<", so it can never open a tag whatever the rendering sink does, and no control
     * character other than tab/newline.
     *
     * The ONE rule for author-controlled display texts, enforced at construction of the
     * value object — i.e. both when a definition is registered (write, refused with an
     * error) and when it is hydrated from a registry row (read, the row is skipped and
     * logged) — so a value written straight into the table cannot bypass it.
     *
     * Static (not part of the interface): called by the ExtraPropertyDefinition constructor
     * and the constraint DSL parser, which cannot receive injected services.
     */
    public static function isSafeDisplayText(string $value): bool
    {
    }
    /**
     * Whether a value is a well-formed PrestaShop translation domain: 2 or 3 dot-separated
     * PascalCase segments ("Admin.Actions", "Modules.Demoextrafield.Admin"). Anything that
     * could reach another subsystem is refused — the "+intl-icu" suffix (which would route
     * the wording through the ICU formatter, where a malformed pattern throws on every
     * render), path or separator characters, whitespace.
     *
     * Static (not part of the interface): called by the ExtraPropertyDefinition constructor.
     */
    public static function isTranslationDomain(string $value): bool
    {
    }
    /**
     * Whether a value controlled by a definition author may be used as a link target: an
     * absolute http(s) URL or a root-relative path. Attribute escaping does not neutralise a
     * "javascript:" or "data:" scheme inside href, so the scheme is what is checked. Whitespace
     * and quote characters are refused, and so is the backslash: browsers normalise "\" to "/"
     * in URLs with a special scheme, so "/\evil.example" would navigate off-site exactly like the
     * protocol-relative "//evil.example" this rule refuses.
     *
     * Static (not part of the interface): called by ExtraPropertyFormOptionsPolicy.
     */
    public static function isSafeUrl(string $value): bool
    {
    }
    /**
     * The single rule-set for "can this value be stored under the declared type" — shared
     * by the registry (default values, ExtraPropertyRegistry::isDefaultValueCompatible())
     * and by validateValue() (every regular write), so what is refused as a default is
     * refused as a value and vice versa. Values may arrive as native scalars (module code,
     * Admin API JSON) or as strings (BO form fields) — both spellings of a valid value are
     * accepted, plus the runtime-only shapes (DateTimeInterface for DATE, an already
     * decoded structure for JSON). Null and '' always pass: "no value" is the storage
     * column's concern (nullability) or a declared constraint's (requiredness).
     *
     * Static (not part of the interface): also called by the registry, which validates
     * defaults with its own dedicated exception.
     */
    public static function isValueCompatible(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type, mixed $value, ?array $enumValues = null): bool
    {
    }
    /**
     * A literal 'Y-m-d' or 'Y-m-d H:i:s' datetime. The round-trip format comparison also
     * rejects impossible dates that createFromFormat() would silently roll over
     * ('2026-02-31' parses as March 3rd).
     */
    protected static function isLiteralDateTime(string $value): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateValue(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, mixed $value): \Symfony\Component\Validator\ConstraintViolationListInterface
    {
    }
    /**
     * Validates the value against the definition's DECLARED Symfony constraints only —
     * the historical opt-in behaviour; validateValue() adds the implicit type safety net.
     */
    protected function validateDeclaredConstraints(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, mixed $value): \Symfony\Component\Validator\ConstraintViolationListInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate(array $valuesByModule, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): \Symfony\Component\Validator\ConstraintViolationListInterface
    {
    }
    /**
     * Applies isValueCompatible() to the submitted value, through its constraint form
     * (ExtraPropertyTypeCompatibility — also the one the form builder modifier attaches to
     * every extra field, so all write paths share message and rules). The LANG/SHOP array
     * shape ([id_lang|locale => value] / [id_shop => value]) is checked leaf by leaf via
     * Assert\All, each violation tagged with its "[<key>]" sub-path — except for JSON,
     * whose array shape IS the (decoded) value. A scalar (COMMON/SHOP scalar, or the
     * single-language value an ObjectModel loaded with a langId exposes) is checked
     * directly.
     */
    protected function validateTypeCompatibility(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, mixed $value): \Symfony\Component\Validator\ConstraintViolationListInterface
    {
    }
    /**
     * Re-bases every violation's property path under $prefix, preserving message, template, parameters, root,
     * invalid value, plural and code. Symfony violation paths are immutable, so each violation is reconstructed.
     */
    protected function rebase(\Symfony\Component\Validator\ConstraintViolationListInterface $violations, string $prefix): \Symfony\Component\Validator\ConstraintViolationListInterface
    {
    }
}
