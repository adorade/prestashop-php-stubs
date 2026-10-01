<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Extends The Symfony framework bundle controller to add common functions for PrestaShop needs.
 *
 * @deprecated since 9.0 to be removed in future versions (10+ at least, when it will not be used anymore),
 * should stop using it in favor of PrestaShopAdminController.
 */
class FrameworkBundleAdminController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @deprecated since 9.0
     */
    public const PRESTASHOP_CORE_CONTROLLERS_TAG = 'prestashop.core.controllers';
    protected ?\Symfony\Contracts\Service\ServiceProviderInterface $controllerContainer = null;
    protected ?\Symfony\Component\DependencyInjection\Container $globalContainer = null;
    /**
     * This method is completely hacky, we count on the fact that it is going to be used to inject the controller's dedicated
     * minified controller (thanks to the @required annotation, autowiring and AbstractController parent class), this allows us
     * to store the controller container in a dedicated field.
     *
     * On a second call, made by Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver, this setter is called with the
     * global container (mainly to cehck the current value actually), so we use the occasion to store the global container.
     *
     * The real container should be the controller one, but it doesn't contain all the public services we need that are in
     * the global container, so we keep a reference on both containers so that the get and has methods can try fallback on
     * both of them.
     *
     * This is quite ugly, but it prevents refactoring all the controllers (from both core and modules controllers), it is only
     * done on controllers that extend this class which should not be used anymore and be replaced by PrestaShopAdminController
     * controller by controller along with a refacto to do proper dependency injection.
     *
     * @param \Psr\Container\ContainerInterface $container
     *
     * @return \Psr\Container\ContainerInterface|null
     *
     * Note: this annotation is a MUST-HAVE, we have to keep it
     *
     * @required
     */
    public function setContainer(\Psr\Container\ContainerInterface $container): ?\Psr\Container\ContainerInterface
    {
    }
    /**
     * This method was removed in Symfony 6, for backward compatibility reasons this method is temporarily
     * maintained so the modules can keep using it a little longer. It will be removed in the next major though
     * along with this base controller class
     *
     * @deprecated since 9.0
     */
    protected function has(string $id): bool
    {
    }
    /**
     * This method was removed in Symfony 6, for backward compatibility reasons this method is temporarily
     * maintained so the modules can keep using it a little longer. It will be removed in the next major though
     * along with this base controller class
     *
     * @deprecated since 9.0
     */
    protected function get(string $id): object
    {
    }
    /**
     * This special get method tries to get a service either in the controller custom-made container (that contains
     * the most regular aliases to private services like twig, security, ...) and if it doesn't find it it tries to
     * get it from the global container (that contains all public services).
     *
     * This is completely going around the framework, we do this to allow this class to behave as it used to without
     * having to refactor the controller completely with proper dependncy injection, but it's a temporary solution that
     * will disappear with this fix.
     *
     * @param string $id
     *
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    protected function doGet(string $id): object
    {
    }
    /**
     * This method was removed in Symfony 6, for backward compatibility reasons this method is temporarily
     * maintained so the modules can keep using it a little longer. It will be removed in the next major though
     * along with this base controller class
     *
     * @deprecated since 9.0
     */
    protected function getDoctrine(): \Doctrine\Persistence\ManagerRegistry
    {
    }
    /**
     * @var string|null
     */
    protected $layoutTitle;
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface
     */
    protected function getConfiguration(): \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface
    {
    }
    /**
     * Returns form errors for JS implementation.
     *
     * Parse all errors mapped by id html field
     *
     * @param \Symfony\Component\Form\FormInterface $form
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
     * @throws \Exception
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
     * @return \PrestaShop\PrestaShop\Core\Localization\LocaleInterface
     */
    protected function getContextLocale(): \PrestaShop\PrestaShop\Core\Localization\LocaleInterface
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
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
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
     * @throws \Exception
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
     * @param \PrestaShop\PrestaShop\Core\Grid\GridInterface $grid
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
     * @return \Symfony\Component\HttpFoundation\JsonResponse
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
     * @param \Symfony\Component\Form\FormInterface $form
     */
    protected function addFlashFormErrors(\Symfony\Component\Form\FormInterface $form)
    {
    }
    /**
     * Get error by exception from given messages
     *
     * @param \Exception $e
     * @param array $messages
     *
     * @return string
     */
    protected function getErrorMessageForException(\Exception $e, array $messages)
    {
    }
    protected function getTranslator(): \PrestaShopBundle\Translation\TranslatorInterface
    {
    }
}
