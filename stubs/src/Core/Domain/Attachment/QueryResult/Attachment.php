<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult;

/**
 * Stores attachment path and original name information.
 */
class Attachment
{
    /**
     * @param string $path
     * @param string $name
     */
    public function __construct(string $path, string $name)
    {
    }
    /**
     * @return string
     */
    public function getPath(): string
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
}
