<?php

namespace PrestaShopBundle\Event;

class ModuleManagementEvent extends \Symfony\Contracts\EventDispatcher\Event
{
    public const PRE_ACTION = 'module.pre_action';
    public const INSTALL = 'module.install';
    public const POST_INSTALL = 'module.post.install';
    public const UNINSTALL = 'module.uninstall';
    public const DISABLE = 'module.disable';
    public const ENABLE = 'module.enable';
    public const UPGRADE = 'module.upgrade';
    public const UPLOAD = 'module.upload';
    public const RESET = 'module.reset';
    public const DELETE = 'module.delete';
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module)
    {
    }
    public function getModule(): \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
    }
}
