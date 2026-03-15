<?php

namespace PrestaShop\PrestaShop\Adapter\Module\Tab;

/**
 * Class responsible of unregister existing tabs of Back Office's menu.
 */
class ModuleTabUnregister
{
    /**
     * @var LangRepository
     */
    protected $langRepository;
    /**
     * @var TabRepository
     */
    protected $tabRepository;
    public function __construct(\PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, \PrestaShopBundle\Entity\Repository\LangRepository $langRepository, \Psr\Log\LoggerInterface $logger, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Uninstall all module-defined tabs.
     *
     * This is done automatically as part of the module uninstallation.
     *
     * @return void
     */
    public function unregisterTabs(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module)
    {
    }
    /**
     * @param ModuleInterface $module
     */
    public function disableTabs(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module)
    {
    }
}
