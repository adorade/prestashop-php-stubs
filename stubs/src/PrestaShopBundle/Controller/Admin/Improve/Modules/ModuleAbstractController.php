<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Modules;

abstract class ModuleAbstractController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    public const CONTROLLER_NAME = 'ADMINMODULESSF';
    public const CONFIGURABLE_MODULE_TYPE = 'to_configure';
    public const UPDATABLE_MODULE_TYPE = 'to_update';
    public const TOTAL_MODULE_TYPE = 'count';
    final protected function getNotificationPageData(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $moduleCollection): array
    {
    }
    protected function getModuleRepository(): \PrestaShop\PrestaShop\Core\Module\ModuleRepositoryInterface
    {
    }
    /**
     * Common method for all module related controller for getting the header buttons.
     *
     * @return array
     */
    protected function getToolbarButtons()
    {
    }
}
