<?php

namespace PrestaShopBundle\Bridge\AdminController;

/**
 * The bridge class is used as a proxy between the internal controller configuration and the legacy code.
 *
 * It is accessible via the Context and/or the hooks, but to avoid legacy code accessing the controller configuration
 * directly this object provides access to the configuration fields via a whitelist thus protecting th other elements
 * of the ControllerConfiguration which shouldn't be accessed directly.
 *
 * It also allows integrating legacy functions that were usable on AdminController thus we don't need to implement them
 * in the framework controller.
 *
 * @property int $id
 * @property string $className
 * @property string $controller_name
 * @property string $php_self
 * @property string $current_index
 * @property string|null $position_identifier
 * @property string $table
 * @property string $token
 * @property Employee $user
 * @property array $meta_title
 * @property array $breadcrumbs
 * @property bool $lite_display
 * @property string $display
 * @property bool $show_page_header_toolbar
 * @property string $page_header_toolbar_title
 * @property array $toolbar_btn
 * @property array $toolbar_title
 * @property bool $display_header
 * @property bool $display_header_javascript
 * @property bool $display_footer
 * @property bool $bootstrap
 * @property array $css_files
 * @property array $js_files
 * @property string $tpl_folder
 * @property array $errors
 * @property array $warnings
 * @property array $confirmations
 * @property array $informations
 * @property bool $json
 * @property string $template
 * @property array $tpl_vars
 * @property array $modals
 * @property int $multishop_context
 * @property bool $multishop_context_group
 */
class LegacyControllerBridge implements \PrestaShopBundle\Bridge\AdminController\LegacyControllerBridgeInterface
{
    /**
     * @param ControllerConfiguration $controllerConfiguration
     * @param FeatureInterface $multistoreFeature
     * @param LegacyContext $legacyContext
     * @param HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@intheritedoc}
     */
    public function setMedia($isNewTheme = false): void
    {
    }
    /**
     * {@intheritedoc}
     */
    public function addCSS($cssUri, $cssMediaType = 'all', $offset = null, $checkPath = true): void
    {
    }
    /**
     * {@intheritedoc}
     */
    public function addJS($jsUri, $checkPath = true): void
    {
    }
    /**
     * {@intheritedoc}
     */
    public function addJqueryPlugin($name, $folder = null, $css = true): void
    {
    }
    /**
     * {@intheritedoc}
     */
    public function addJqueryUI($component, $theme = 'base', $checkDependencies = true): void
    {
    }
    /**
     * This whole bridge is used as legacy $context->controller, but all properties are held in configuration,
     * so we use a "magic" getter with a help of properties map and property accessor
     * to allow legacy code retrieving properties from configuration as if it would be in legacy controller
     *
     * @param string $name
     *
     * @return mixed
     */
    public function &__get(string $name)
    {
    }
    /**
     * This whole bridge is used as legacy $context->controller, but all properties are held in configuration,
     * so we use a "magic" setter with a help of properties map and property accessor
     * to allow legacy code setting properties in configuration as if it would be in legacy controller.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return void
     */
    public function __set(string $name, $value): void
    {
    }
}
