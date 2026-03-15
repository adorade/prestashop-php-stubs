<?php

namespace PrestaShop\PrestaShop\Core\Module;

/**
 * This class wrap an array of ModuleInterface
 */
class ModuleCollection implements \ArrayAccess, \Countable, \IteratorAggregate
{
    public function __construct(array $modules = [])
    {
    }
    /**
     * @param ModuleInterface[] $modules
     *
     * @return ModuleCollection
     */
    public static function createFrom(array $modules): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    public function getIterator(): \Traversable
    {
    }
    public function count(): int
    {
    }
    public function offsetExists($offset): bool
    {
    }
    /**
     * @param mixed $offset
     *
     * @return ModuleInterface|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    public function offsetSet($offset, $value): void
    {
    }
    public function offsetUnset($offset): void
    {
    }
    public function filter(callable $callable): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    public function add(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module): void
    {
    }
    public function addError(\Throwable $error): void
    {
    }
    public function getErrors(): array
    {
    }
}
