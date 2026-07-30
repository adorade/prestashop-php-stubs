<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tab\Command;

class UpdateTabStatusByClassNameCommand
{
    public function __construct(string $className, bool $status)
    {
    }
    /**
     * @return bool
     */
    public function isStatus(): bool
    {
    }
    /**
     * @return string
     */
    public function getClassName(): string
    {
    }
}
