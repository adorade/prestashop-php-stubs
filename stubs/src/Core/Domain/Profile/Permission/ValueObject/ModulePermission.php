<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject;

class ModulePermission implements \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject\PermissionInterface
{
    public const VIEW = 'view';
    public const CONFIGURE = 'configure';
    public const UNINSTALL = 'uninstall';
    public const SUPPORTED_PERMISSIONS = [self::VIEW, self::CONFIGURE, self::UNINSTALL];
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
