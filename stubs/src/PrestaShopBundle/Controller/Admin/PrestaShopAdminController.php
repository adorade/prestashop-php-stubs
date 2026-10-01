<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Default controller for PrestaShop admin pages.
 */
class PrestaShopAdminController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public static function getSubscribedServices(): array
    {
    }
    protected function getIniConfiguration(): \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration
    {
    }
    protected function getConfiguration(): \PrestaShop\PrestaShop\Core\ConfigurationInterface
    {
    }
    protected function getFeatureFlagStateChecker(): \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface
    {
    }
    protected function getApiClientContext(): \PrestaShop\PrestaShop\Core\Context\ApiClientContext
    {
    }
    protected function getCountryContext(): \PrestaShop\PrestaShop\Core\Context\CountryContext
    {
    }
    protected function getCurrencyContext(): \PrestaShop\PrestaShop\Core\Context\CurrencyContext
    {
    }
    protected function getEmployeeContext(): \PrestaShop\PrestaShop\Core\Context\EmployeeContext
    {
    }
    protected function getLanguageContext(): \PrestaShop\PrestaShop\Core\Context\LanguageContext
    {
    }
    protected function getLegacyControllerContext(): \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext
    {
    }
    protected function getShopContext(): \PrestaShop\PrestaShop\Core\Context\ShopContext
    {
    }
    protected function getEnvironment(): \PrestaShop\PrestaShop\Core\EnvironmentInterface
    {
    }
    /**
     * Get commands bus to execute command.
     */
    protected function dispatchCommand(mixed $command): mixed
    {
    }
    /**
     * Get commands bus to execute query.
     */
    protected function dispatchQuery(mixed $query): mixed
    {
    }
    protected function presentGrid(\PrestaShop\PrestaShop\Core\Grid\GridInterface $grid): array
    {
    }
    protected function dispatchHookWithParameters(string $hookName, array $parameters = []): void
    {
    }
    protected function trans(string $id, array $parameters = [], ?string $domain = null, ?string $locale = null): string
    {
    }
    protected function generateSidebarLink(string $section, ?string $title = null): string
    {
    }
    /**
     * Get error by exception from given messages
     *
     * @param array<string, string|array<int, string>> $messages
     *
     * @return string
     */
    protected function getErrorMessageForException(\Throwable $e, array $messages = []): string
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
    protected function getFormErrorsForJS(\Symfony\Component\Form\FormInterface $form): array
    {
    }
    /**
     * Interprets the filters provided in the request (based on the grid definition) and return a redirect
     * response to the provided route (usually the listing).
     *
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    protected function buildSearchResponse(\PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory, \Symfony\Component\HttpFoundation\Request $request, string $filterId, string $redirectRoute, array $queryParamsToKeep = []): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Updates the position of a grid based on the provided PositionDefinition and provided data.
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionInterface $positionDefinition
     * @param array $positionsData
     *
     * @return void
     *
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    protected function updateGridPosition(\PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionInterface $positionDefinition, array $positionsData): void
    {
    }
    /**
     * Adds a list of errors as flash error message.
     *
     * @param array $errorMessages Error message, can be a string or an array with parameters for trans method
     */
    protected function addFlashErrors(array $errorMessages): void
    {
    }
    protected function addFlashFormErrors(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    /**
     * Return the authorization level of the current employee for the request controller.
     *
     * @param string $legacyControllerName Name of the legacy controller of which the level is requested
     *
     * @return int
     */
    protected function getAuthorizationLevel(string $legacyControllerName): int
    {
    }
    protected function hasAuthorizationByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): bool
    {
    }
    protected function isDemoModeEnabled(): bool
    {
    }
    protected function getDemoModeErrorMessage(): string
    {
    }
}
