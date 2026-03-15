<?php

namespace PrestaShopBundle\Event;

class ModuleManagementEvent extends \Symfony\Contracts\EventDispatcher\Event
{
    public const INSTALL = 'module.install';
    public const POST_INSTALL = 'module.post.install';
    public const UNINSTALL = 'module.uninstall';
    public const DISABLE = 'module.disable';
    public const ENABLE = 'module.enable';
    public const ENABLE_MOBILE = 'module.enable.mobile';
    public const DISABLE_MOBILE = 'module.disable.mobile';
    public const UPGRADE = 'module.upgrade';
    public const RESET = 'module.reset';
    public const DELETE = 'module.delete';
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module)
    {
    }
    public function getModule(): \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
    }
}
