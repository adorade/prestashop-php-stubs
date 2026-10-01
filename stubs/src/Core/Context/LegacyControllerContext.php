<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This class ensures compatibility with the context controller in pages migrated to Symfony.
 * It encompasses the majority of public fields found in a legacy controller.
 */
class LegacyControllerContext
{
    /**
     * List of CSS files.
     *
     * @var string[]
     */
    public array $css_files = [];
    /**
     * List of JavaScript files.
     *
     * @var string[]
     */
    public array $js_files = [];
    /**
     * Controller name alias kept for backward compatibility.
     *
     * @var string
     */
    public readonly string $php_self;
    /**
     * Error messages displayed after refresh
     *
     * @var array<string|int, string|bool>
     */
    public array $errors = [];
    /**
     * Warning messages displayed after refresh
     *
     * @var array<string|int, string|bool>
     */
    public array $warnings = [];
    /**
     * Information messages displayed after refresh
     *
     * @var array<string|int, string|bool>
     */
    public array $informations = [];
    /**
     * Confirmation/success messages displayed after refresh
     *
     * @var array<string|int, string|bool>
     */
    public array $confirmations = [];
    /**
     * Image type
     *
     * @var string
     */
    public string $imageType = 'jpg';
    /**
     * Array description of buttons to add in the header toolbar
     *
     * @var array|\Traversable
     */
    public array|\Traversable $page_header_toolbar_btn = [];
    public bool $ajax = false;
    protected array $languages = [];
    public bool $multishop_context_group = true;
    /**
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container Dependency container
     * @param string $controller_name Current controller name without suffix
     * @param string $controller_type Controller type. Possible values: 'front', 'modulefront', 'admin', 'moduleadmin'.
     * @param int $multishop_context Allowed multi shop contexts Possible values: Byte addition of ShopConstraint::ALL_SHOPS | ShopConstraint::SHOP_GROUP | ShopConstraint::SHOP
     * @param string|null $className Legacy ObjectModel associated to the controller (if possible)
     * @param int $id Tab ID
     * @param string|null $token Legacy security token
     * @param string $override_folder
     * @param string $currentIndex Legacy current index built like a legacy URL based on controller name
     */
    public function __construct(protected readonly \Symfony\Component\DependencyInjection\ContainerInterface $container, public readonly string $controller_name, public readonly string $controller_type, public readonly int $multishop_context, public readonly ?string $className, public readonly int $id, public readonly ?string $token, public readonly string $override_folder, public readonly string $currentIndex, public readonly string $table, protected readonly \Symfony\Component\HttpFoundation\Request $request, protected readonly int $employeeLanguageId, protected readonly string $physicalUri, protected readonly string $adminFolderName, protected readonly bool $isLanguageRTL, protected readonly string $psVersion, protected readonly \Twig\Environment $twig)
    {
    }
    public function getTwig(): \Twig\Environment
    {
    }
    public function addCSS(array|string $css_uri, string $css_media_type = 'all', ?int $offset = null, bool $check_path = true): void
    {
    }
    public function addJS(array|string $js_uri, bool $check_path = true): void
    {
    }
    /**
     * Adds jQuery UI component(s) to queued JS file list.
     */
    public function addJqueryUI(string|array $component, string $theme = 'base', bool $checkDependencies = true): void
    {
    }
    /**
     * Adds jQuery plugin(s) to queued JS file list.
     */
    public function addJqueryPlugin(string|array $name, ?string $folder = null, bool $css = true): void
    {
    }
    public function getLanguages(): array
    {
    }
    public function getContainer(): \Symfony\Component\DependencyInjection\ContainerInterface
    {
    }
    /**
     * This is an equivalent of AdminController::setMedia(false)
     *
     * @return void
     */
    public function loadLegacyMedia(): void
    {
    }
}
