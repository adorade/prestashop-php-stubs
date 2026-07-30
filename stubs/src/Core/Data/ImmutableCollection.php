<?php

namespace PrestaShop\PrestaShop\Core\Data;

/**
 * @template T
 * @template-implements  IteratorAggregate<T>
 */
abstract class ImmutableCollection implements \IteratorAggregate, \Countable
{
    /** @var T[] */
    protected $values;
    /**
     * @param T[] $values
     *
     * Keep the constructor protected to keep immutability, the subclasses should not change this constructor
     * and rely on a static factory method for their construction:
     *
     *   public static function from(T ...$values): static
     */
    protected function __construct(array $values)
    {
    }
    /**
     * @return ArrayIterator<string|int, T>|T[]
     */
    public function getIterator(): \Traversable
    {
    }
    public function count(): int
    {
    }
    /**
     * @return T
     */
    public function first()
    {
    }
    /**
     * @return static
     */
    public function filter(callable $callback): self
    {
    }
    public function isEmpty(): bool
    {
    }
}
