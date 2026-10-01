<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject;

interface PermissionInterface
{
    public function getValue(): string;
}
