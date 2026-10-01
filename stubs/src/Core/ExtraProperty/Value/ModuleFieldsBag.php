<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Value;

/**
 * Per-module value bag inside an ExtraPropertiesBag.
 *
 * Keys are field names (property_name from the definition). Writes are tracked
 * for persistence; getModifiedValues() returns the dirty [propertyName => value]
 * map — scope routing and storage column resolution happen inside the writer.
 *
 * Usage (via parent ExtraPropertiesBag):
 *   $product->extra_properties['demoextrafield']['is_dangerous']       // read
 *   $product->extra_properties['demoextrafield']['is_dangerous'] = 1   // write + mark dirty
 */
final class ModuleFieldsBag implements \ArrayAccess, \IteratorAggregate, \JsonSerializable
{
    /**
     * @param array<string, mixed> $initialValues
     */
    public function __construct(array $initialValues = [])
    {
    }
    public function offsetExists(mixed $offset): bool
    {
    }
    public function offsetGet(mixed $offset): mixed
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
     * @return array<string, mixed> [propertyName => value]
     */
    public function jsonSerialize(): array
    {
    }
    public function hasModifications(): bool
    {
    }
    /**
     * @return array<string, mixed> [propertyName => value] map of dirty fields
     */
    public function getModifiedValues(): array
    {
    }
}
