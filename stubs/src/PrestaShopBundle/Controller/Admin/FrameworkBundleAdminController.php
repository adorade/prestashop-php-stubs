<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Extends The Symfony framework bundle controller to add common functions for PrestaShop needs.
 */
class FrameworkBundleAdminController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public const PRESTASHOP_CORE_CONTROLLERS_TAG = 'prestashop.core.controllers';
    /**
     * @deprecated since version 8.1, use $this->getConfiguration() instead
     *
     * @var Configuration
     */
    protected $configuration;
    /**
     * @var string|null
     */
    protected $layoutTitle;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * @Template
     *
     * @deprecated Since 8.0, to be removed in the next major version
     *
     * @return array|Response Template vars if the action uses template annotation, or a Response object
     */
    public function overviewAction()
    {
    }
    /**
     * @return ShopConfigurationInterface
     */
    protected function getConfiguration(): \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface
    {
    }
    /**
     * Returns form errors for JS implementation.
     *
     * Parse all errors mapped by id html field
     *
     * @param FormInterface $form
     *
     * @return array<array<string>> Errors
     *
     * @throws \Symfony\Component\Translation\Exception\InvalidArgumentException
     */
    public function getFormErrorsForJS(\Symfony\Component\Form\FormInterface $form)
    {
    }
    /**
     * Creates a HookEvent, sets its parameters, and dispatches it.
     *
     * Wrapper to: @see HookDispatcher::dispatchWithParameters()
     *
     * @param string $hookName The hook name
     * @param array $parameters The hook parameters
     */
    protected function dispatchHook($hookName, array $parameters)
    {
    }
    /**
     * Creates a RenderingHookEvent, sets its parameters, and dispatches it. Returns the event with the response(s).
     *
     * Wrapper to: @see HookDispatcher::renderForParameters()
     *
     * @param string $hookName The hook name
     * @param array $parameters The hook parameters
     *
     * @return array The responses of hooks
     *
     * @throws Exception
     */
    protected function renderHook($hookName, array $parameters)
    {
    }
    /**
     * Generates a documentation link.
     *
     * @param string $section Legacy controller name
     * @param bool|string $title Help title
     *
     * @return string
     */
    protected function generateSidebarLink($section, $title = false)
    {
    }
    /**
     * Get the old but still useful context.
     *
     * @return \Context
     */
    protected function getContext()
    {
    }
    /**
     * @return string
     *
     * //@todo: is there a better way using currency iso_code?
     */
    protected function getContextCurrencyIso(): string
    {
    }
    /**
     * Get the locale based on the context
     *
     * @return Locale
     */
    protected function getContextLocale(): \PrestaShop\PrestaShop\Core\Localization\Locale
    {
    }
    /**
     * @param string $lang
     *
     * @return mixed
     */
    protected function langToLocale($lang)
    {
    }
    /**
     * @return bool
     */
    protected function isDemoModeEnabled()
    {
    }
    /**
     * @return string
     */
    protected function getDemoModeErrorMessage()
    {
    }
    /**
     * Checks if the attributes are granted against the current authentication token and optionally supplied object.
     *
     * @param string $controller name of the controller that token is tested against
     *
     * @return int
     *
     * @throws \LogicException
     */
    protected function authorizationLevel($controller)
    {
    }
    /**
     * Get the translated chain from key.
     *
     * @param string $key the key to be translated
     * @param string $domain the domain to be selected
     * @param array $parameters Optional, pass parameters if needed (uncommon)
     *
     * @return string
     */
    protected function trans($key, $domain, array $parameters = [])
    {
    }
    /**
     * Return errors as flash error messages.
     *
     * @param array $errorMessages
     *
     * @throws \LogicException
     */
    protected function flashErrors(array $errorMessages)
    {
    }
    /**
     * Redirect employee to default page.
     *
     * @return RedirectResponse
     */
    protected function redirectToDefaultPage()
    {
    }
    /**
     * Check if the connected user is granted to actions on a specific object.
     *
     * @param string $action
     * @param string $object
     * @param string $suffix
     *
     * @return bool
     *
     * @throws \LogicException
     */
    protected function actionIsAllowed($action, $object = '', $suffix = '')
    {
    }
    /**
     * Display a message about permissions failure according to an action.
     *
     * @param string $action
     * @param string $suffix
     *
     * @return string
     *
     * @throws Exception
     */
    protected function getForbiddenActionMessage($action, $suffix = '')
    {
    }
    /**
     * Get fallback error message when something unexpected happens.
     *
     * @param string $type
     * @param int $code
     * @param string $message
     *
     * @return string
     */
    protected function getFallbackErrorMessage($type, $code, $message = '')
    {
    }
    /**
     * Get Admin URI from PrestaShop 1.6 Back Office.
     *
     * @param string $controller the old Controller name
     * @param bool $withToken whether we add token or not
     * @param array $params url parameters
     *
     * @return string the page URI (with token)
     */
    protected function getAdminLink($controller, array $params, $withToken = true)
    {
    }
    /**
     * Present provided grid.
     *
     * @param GridInterface $grid
     *
     * @return array
     */
    protected function presentGrid(\PrestaShop\PrestaShop\Core\Grid\GridInterface $grid)
    {
    }
    /**
     * Get commands bus to execute commands.
     *
     * @return \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
     */
    protected function getCommandBus()
    {
    }
    /**
     * Get query bus to execute queries.
     *
     * @return \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
     */
    protected function getQueryBus()
    {
    }
    /**
     * @param array $errors
     * @param int $httpStatusCode
     *
     * @return JsonResponse
     */
    protected function returnErrorJsonResponse(array $errors, $httpStatusCode)
    {
    }
    /**
     * @return int
     */
    protected function getContextLangId()
    {
    }
    /**
     * @return int
     */
    protected function getContextShopId()
    {
    }
    /**
     * @param FormInterface $form
     */
    protected function addFlashFormErrors(\Symfony\Component\Form\FormInterface $form)
    {
    }
    /**
     * Get error by exception from given messages
     *
     * @param Exception $e
     * @param array $messages
     *
     * @return string
     */
    protected function getErrorMessageForException(\Exception $e, array $messages)
    {
    }
}
