<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * This controller acts as a wrapper around a legacy controller, it executes the core logic of an AdminController
 * instance, most of the init methods are called to stay the closest possible to the original behaviour. Some methods
 * have been voluntarily stripped (meaning they will not be executed) because they mostly handle the logic of the layout
 * rendering (menu, toolbar, ...).
 *
 * All the layout logic is already handled by the Symfony layout and its internal components, so we don't need to execute
 * it twice.
 *
 * So this controller gets back the central content of an AdminController after it's been run and displayed and integrate it
 * in the "twig legacy layout" that is based on the same Symfony layout components as migrated page, but it still uses the
 * templates JS and CSS from the default theme.
 *
 * There are cases where this approach may not work, mostly when the legacy controllers relies on die or exit methods (which is a
 * bad practice). So far the use cases tested work fine, even the use of the header function in legacy code still works correctly.
 * But if the legacy controller exits too soon then we can't get the content and return a Symfony response which may result in
 * unexpected side effects.
 */
class LegacyController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public function __construct(protected readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, protected readonly \PrestaShopBundle\Twig\Layout\SmartyVariablesFiller $assignSmartyVariables, protected readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, protected readonly \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder)
    {
    }
    /**
     * This mimics/adapts the Dispatcher::dispatch method, detect the controller, initialize it and display it
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function legacyPageAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This mimics/adapts the AdminController:display method, stripped from the part that are already handled by the
     * symfony layout and without direct echoes from smarty
     *
     * @param \AdminController $adminController
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \SmartyException
     */
    protected function renderPageContent(\AdminController $adminController): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This part mimics how AdminController renders ajax content
     *
     * Many ajax controllers directly echo their content so in this case we prefer catching the output of the legacy controller,
     * it is then returned as a proper Symfony response.
     *
     * @param \AdminController $adminController
     * @param string $action
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderAjaxController(\AdminController $adminController, string $action): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This mimics the first part of AdminController::run initialize the controller and its sub contents before actually displaying it,
     * it was stripped from the part already handled by the Symfony layout
     *
     * Note: some legacy controllers may already use die at this point (to echo content and finish the process) when postProcess is called.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param array $dispatcherHookParameters
     *
     * @return \AdminController
     */
    protected function initController(\Symfony\Component\HttpFoundation\Request $request, array $dispatcherHookParameters): \AdminController
    {
    }
}
