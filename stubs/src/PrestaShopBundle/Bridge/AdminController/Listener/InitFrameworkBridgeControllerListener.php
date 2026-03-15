<?php

namespace PrestaShopBundle\Bridge\AdminController\Listener;

/**
 * Initializes FrameworkBridgeController
 *
 * @see FrameworkBridgeControllerInterface
 */
class InitFrameworkBridgeControllerListener
{
    /**
     * @param LegacyContext $legacyContext
     * @param Repository $localeRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository)
    {
    }
    /**
     * This method is the first entry point of horizontal migration.
     * In this method we:
     *      - Assign an instance of itself to the controller in the php_self variable..
     *        This comportment is needed for legacies hooks.
     *      - Assign to the context an instance of the controller.
     *        This is needed for all legacy classes that use the context and used controller instance.
     *      - Define the current locale for this request.
     *      - Create the configuration object needed by each controller migrate horizontally.
     *      - Init the current index which is needed by legacy Helper
     *      - Get the token from the URL and store hit in the controller configuration object
     *
     * @param ControllerEvent $event
     *
     * @return void
     */
    public function onKernelController(\Symfony\Component\HttpKernel\Event\ControllerEvent $event): void
    {
    }
}
