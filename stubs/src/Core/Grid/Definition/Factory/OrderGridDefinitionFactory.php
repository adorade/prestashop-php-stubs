<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Creates definition for Orders grid
 */
final class OrderGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    public const GRID_ID = 'order';
    /**
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $dispatcher
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderCountriesChoiceProvider
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStatusesChoiceProvider
     * @param string $contextDateFormat
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature
     * @param \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface $printInvoiceAccessibilityChecker
     * @param \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface $printDeliverySlipAccessibilityChecker
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStatesChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $dispatcher, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderCountriesChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStatusesChoiceProvider, $contextDateFormat, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface $printInvoiceAccessibilityChecker, \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface $printDeliverySlipAccessibilityChecker, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStatesChoiceProvider)
    {
    }
}
