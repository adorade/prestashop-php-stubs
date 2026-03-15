<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject;

class ControllerPermission implements \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject\PermissionInterface
{
    public const VIEW = 'view';
    public const ADD = 'add';
    public const EDIT = 'edit';
    public const DELETE = 'delete';
    public const ALL = 'all';
    public const SUPPORTED_PERMISSIONS = [self::VIEW, self::ADD, self::EDIT, self::DELETE];
    /**
     * @param string $permission
     */
    public function __construct(string $permission)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
    protected function assertPermissionIsSupported(string $permission): void
    {
    }
}
