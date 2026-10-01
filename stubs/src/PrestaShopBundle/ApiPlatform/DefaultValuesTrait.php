<?php

namespace PrestaShopBundle\ApiPlatform;

/**
 * Applies the default values declared by an operation (defaultValues extra property) to its input.
 *
 * An API resource property cannot carry a default value: the input of an operation is denormalized into the CQRS
 * command or query of that operation, never into the resource class, so the default would be dropped on the way. The
 * defaults are therefore declared by the operation itself and injected into its input, which is the request payload for
 * a command, and the URI variables and filters for a query.
 */
trait DefaultValuesTrait
{
    private ?\Symfony\Component\PropertyAccess\PropertyAccessorInterface $defaultValuesPropertyAccessor = null;
    /**
     * A value explicitly provided is never replaced, even a null one, since the client did provide it.
     *
     * A default declared as a context property path (a string starting with [_context]) is resolved against the
     * input, where the context parameters are merged before the defaults are applied: the field then defaults to a
     * value of the current context, like the shops the request applies to. An unreadable path injects nothing, so
     * the field remains a missing one and is reported as such.
     */
    protected function applyDefaultValues(mixed $input, ?\ApiPlatform\Metadata\Operation $operation): mixed
    {
    }
    /**
     * A context default is resolved when the values are applied, so it cannot be documented as a literal default
     * value: the OpenAPI adapter relies on this check to document it differently.
     */
    public static function isContextDefaultValue(mixed $defaultValue): bool
    {
    }
    private function getDefaultValuesPropertyAccessor(): \Symfony\Component\PropertyAccess\PropertyAccessorInterface
    {
    }
}
