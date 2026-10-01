<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject;

class ControllerAllPermissions implements \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject\PermissionInterface
{
    public const ALL = 'all';
    public function getValue(): string
    {
    }
}
