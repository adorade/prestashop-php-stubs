<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Value;

/**
 * Lazy-loading grouped value bag for extra properties on an ObjectModel instance.
 *
 * Keys are module names (e.g. 'demoextrafield', '_core'). Values are ModuleFieldsBag
 * instances keyed by field name. Data is loaded from the DB on first access.
 *
 * Usage:
 *   $product->extra_properties['demoextrafield']['date_last_seen']         // read
 *   $product->extra_properties['demoextrafield']['date_last_seen'] = $val  // write + mark dirty
 *   foreach ($product->extra_properties as $module => $fields) { ... }    // iterate (triggers load)
 *   json_encode($product->extra_properties)                                // serialize
 */
final class ExtraPropertiesBag implements \ArrayAccess, \IteratorAggregate, \JsonSerializable
{
    public function __construct(private readonly \Closure $loader)
    {
    }
    /**
     * Builds a bag whose loader reads extra property values for one entity row.
     *
     * The container is resolved by the caller (e.g. ObjectModel::findContainer() in legacy
     * code, ContainerFinder in Adapter presenters) so this namespace stays free of legacy
     * Context lookups. All guards live inside the loader closure: construction is cheap,
     * never throws, and any invalid state resolves to an empty bag on first access.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface|null $container Null = no-op bag (container unavailable)
     * @param class-string<\ObjectModelCore> $objectModelClassName ObjectModelCore is the most-base
     *                                                            class common to all object models
     *                                                            (ObjectModel is generated dynamically
     *                                                            by the class override mechanism)
     * @param int $entityId Entity row id; <= 0 = no-op bag (not persisted yet)
     * @param int|null $langId Null fetches all languages (lang-keyed arrays), as used by ObjectModel/BO
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint Shop context — determines which row to read
     * @param bool $forFrontOffice When true (default, consistent with ExtraPropertyDefinition::$displayFront),
     *                             only display_front definitions are read; BO callers pass false
     */
    public static function createForEntity(?\Symfony\Component\DependencyInjection\ContainerInterface $container, string $objectModelClassName, int $entityId, ?int $langId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, bool $forFrontOffice = true): self
    {
    }
    public function offsetExists(mixed $offset): bool
    {
    }
    /**
     * Returns the ModuleFieldsBag for the given module key, auto-creating an empty one if unknown.
     * This allows chained writes: $bag['module']['field'] = value.
     */
    public function offsetGet(mixed $offset): \PrestaShop\PrestaShop\Core\ExtraProperty\Value\ModuleFieldsBag
    {
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
    }
    public function offsetUnset(mixed $offset): void
    {
    }
    public function getIterator(): \Traversable
    {
    }
    /**
     * Flattened representation: nested ModuleFieldsBag instances are unwrapped so the
     * result is plain data, usable directly without relying on json_encode() recursion.
     *
     * @return array<string, array<string, mixed>> [moduleKey => [propertyName => value]]
     */
    public function jsonSerialize(): array
    {
    }
    public function hasModifications(): bool
    {
    }
    /**
     * Dirty fields grouped by module — the same shape the reader returns and the writer accepts.
     *
     * @return array<string, array<string, mixed>> [moduleKey => [propertyName => value]]
     */
    public function getModifiedValues(): array
    {
    }
}
