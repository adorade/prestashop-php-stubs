<?php

namespace PrestaShop\PrestaShop\Core\Domain\ValueObject;

/**
 * Class QuerySorting is responsible for providing valid sorting parameter.
 */
class QuerySorting
{
    public const ASC = 'ASC';
    public const DESC = 'DESC';
    /**
     * @param string $sorting
     *
     * @throws InvalidSortingException
     */
    public function __construct(string $sorting)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
