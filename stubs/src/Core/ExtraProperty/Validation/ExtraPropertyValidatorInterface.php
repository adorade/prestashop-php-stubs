<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Validation;

/**
 * Validation contract for the ExtraProperty feature.
 *
 * Value validation (validateValue / validate) is used by forms, API, and ObjectModel. It runs the Symfony
 * constraints declared on each definition through the Symfony Validator and returns the resulting violations
 * (never throws, never returns a boolean): callers decide how to surface them.
 *
 * The structural static helpers (isTableOrIdentifier, isModuleName) live only on the concrete
 * ExtraPropertyValidator: statics cannot be called through an injected interface, so declaring them here would
 * serve no caller.
 *
 * This interface is kept as a DI alias contract (→ ExtraPropertyValidator) so that callers can depend on the
 * interface rather than the concrete class.
 */
interface ExtraPropertyValidatorInterface
{
    /**
     * Validates one extra property value against its definition's constraints.
     *
     * For lang/shop-scoped fields the value may be an array keyed by id_lang / id_shop; each sub-value is
     * validated individually and its violations carry a "[<key>]" property-path suffix. Returns an empty list
     * when the value is valid, or when the definition declares no constraints (validation is opt-in).
     *
     * @param mixed $value
     */
    public function validateValue(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition, mixed $value): \Symfony\Component\Validator\ConstraintViolationListInterface;
    /**
     * Validates a batch of extra property values against their definitions.
     *
     * $valuesByModule is grouped like the reader output / writer input:
     * [moduleKey => [propertyName => value_or_lang_array]].
     * Definitions not present in $valuesByModule are skipped. Returns ALL violations across every definition,
     * each property path prefixed with "<moduleKey>.<propertyName>[.<key>]".
     *
     * @param array<string, array<string, mixed>> $valuesByModule [moduleKey => [propertyName => value]]
     */
    public function validate(array $valuesByModule, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): \Symfony\Component\Validator\ConstraintViolationListInterface;
}
