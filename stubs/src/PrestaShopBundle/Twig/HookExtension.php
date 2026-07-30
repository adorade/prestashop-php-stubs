<?php

namespace PrestaShopBundle\Twig;

/**
 * This class is used by Twig_Environment and provide some methods callable from a twig template.
 */
class HookExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * Constructor.
     *
     * @param HookDispatcherInterface $hookDispatcher
     * @param ModuleDataProvider $moduleDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository = null)
    {
    }
    /**
     * Defines available filters.
     *
     * @return array Twig_SimpleFilter
     */
    public function getFilters()
    {
    }
    /**
     * Defines available functions.
     *
     * @return array Twig_SimpleFilter
     */
    public function getFunctions()
    {
    }
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
    }
    /**
     * Calls the HookDispatcher, and dispatch a RenderingHookEvent.
     *
     * The listeners will then return html data to display in the Twig template.
     *
     * @param string $hookName the name of the hook to trigger
     * @param array $hookParameters the parameters to send to the Hook
     *
     * @throws \Exception if the hookName is missing
     *
     * @return array[string] All listener's responses, ordered by the listeners' priorities
     */
    public function renderHooksArray($hookName, $hookParameters = [])
    {
    }
    /**
     * Calls the HookDispatcher, and dispatch a RenderingHookEvent.
     *
     * The listeners will then return html data to display in the Twig template.
     *
     * @param string $hookName the name of the hook to trigger
     * @param array $hookParameters the parameters to send to the Hook
     *
     * @throws \Exception if the hookName is missing
     *
     * @return string all listener's responses, concatenated in a simple string, ordered by the listeners' priorities
     */
    public function renderHook($hookName, array $hookParameters = [])
    {
    }
    /**
     * Return the concatenated content of a renderHooksArray response
     *
     * @param array $hooksArray the array returned by the renderHooksArray function
     *
     * @return string
     */
    public function hooksArrayContent($hooksArray)
    {
    }
}
