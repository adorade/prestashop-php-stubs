<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * This adapter will complete the new architecture Context with legacy values.
 * A merge is done, but the legacy values will be transferred to the new Context
 * during legacy refactoring.
 */
class LegacyContext
{
    /** @var Context */
    protected static $instance = null;
    /**
     * @param string|null $mailThemesUri
     * @param Tools|null $tools
     */
    public function __construct($mailThemesUri = null, \PrestaShop\PrestaShop\Adapter\Tools $tools = null)
    {
    }
    /**
     * To be used only in Adapters. Should not been called by Core classes. Prefer to use Core\context class,
     * that will contains all you need in the Core architecture.
     *
     * @throws LogicException If legacy context is not set properly
     *
     * @return Context the Legacy context, for Adapter use only
     */
    public function getContext()
    {
    }
    /**
     * Get smarty instance from legacy context.
     *
     * @return Smarty
     */
    public function getSmarty()
    {
    }
    /**
     * Gets the Admin base url (actually random directory name).
     *
     * @return string
     */
    public function getAdminBaseUrl()
    {
    }
    public function getCountryId(): int
    {
    }
    /**
     * Adapter to get Admin HTTP link.
     *
     * @param string $controller the controller name
     * @param bool $withToken
     * @param array<string> $extraParams
     *
     * @return string
     */
    public function getAdminLink($controller, $withToken = true, $extraParams = [])
    {
    }
    /**
     * Returns the controller link in its legacy form, without trying to convert it in symfony url.
     *
     * @param string $controller
     * @param bool $withToken
     * @param array $extraParams
     *
     * @return string
     */
    public function getLegacyAdminLink($controller, $withToken = true, $extraParams = [])
    {
    }
    /**
     * Adapter to get Front controller HTTP link.
     *
     * @param string $controller the controller name
     *
     * @return string
     */
    public function getFrontUrl($controller)
    {
    }
    /**
     * Adapter to get Root Url.
     *
     * @return string The lagacy root URL
     */
    public function getRootUrl()
    {
    }
    /**
     * Adapter to get upload directory
     *
     * @return string
     */
    public function getUploadDirectory()
    {
    }
    /**
     * Url to the mail themes folder
     *
     * @return string
     */
    public function getMailThemesUrl()
    {
    }
    /**
     * This fix is used to have a ready translation in the smarty 'l' function.
     * Called by AutoResponseFormatTrait in beforeActionSuggestResponseFormat().
     * So if you do not use this Trait, you must call this method by yourself in the action.
     *
     * @param string $legacyController
     */
    public function setupLegacyTranslationContext($legacyController = 'AdminTab')
    {
    }
    /**
     * Adapter to get admin legacy layout into legacy controller context.
     *
     * @param string $controllerName The legacy controller name
     * @param string $title The page title to override default one
     * @param array $headerToolbarBtn The header toolbar to override
     * @param string $displayType The legacy display type variable
     * @param bool $showContentHeader can force header toolbar (buttons and title) to be hidden with false value
     * @param string $headerTabContent
     * @param bool $enableSidebar Allow to use right sidebar to display docs for instance
     * @param string $helpLink If specified, will be used instead of legacy one
     * @param string[] $jsRouterMetadata array to provide base_url and security token for JS Router
     * @param string $metaTitle
     * @param bool $useRegularH1Structure allows complex <h1> structure if set to false
     * @param string $baseLayout
     *
     * @return string The html layout
     */
    public function getLegacyLayout($controllerName, $title, $headerToolbarBtn, $displayType, $showContentHeader, $headerTabContent, $enableSidebar, $helpLink = '', $jsRouterMetadata = [], $metaTitle = '', $useRegularH1Structure = true, $baseLayout = 'layout.tpl')
    {
    }
    /**
     * Returns available languages. The first one is the employee default one.
     *
     * @param bool $active Select only active languages
     * @param int|bool $id_shop Shop ID
     * @param bool $ids_only If true, returns an array of language IDs
     *
     * @return array<int|array> Languages
     */
    public function getLanguages($active = true, $id_shop = false, $ids_only = false)
    {
    }
    /**
     * Returns language ISO code set for the current employee.
     *
     * @return string Languages
     */
    public function getEmployeeLanguageIso()
    {
    }
    /**
     * Returns Currency set for the current employee.
     *
     * @return Currency|null
     */
    public function getEmployeeCurrency()
    {
    }
    /**
     * @return Language
     */
    public function getLanguage()
    {
    }
    /**
     * Get employee's default tab name.
     *
     * @return string Default tab name for employee
     *
     * @throws RuntimeException Throws exception if employee does not exist in context
     */
    public function getDefaultEmployeeTab()
    {
    }
    /**
     * @return string
     */
    public function getMailThemesUri()
    {
    }
    /**
     * @return array Returns both enabled and disabled languages
     */
    public function getAvailableLanguages()
    {
    }
    /**
     * @param Context $testInstance
     *                              Unit testing purpose only
     */
    public static function setInstanceForTesting(\Context $testInstance)
    {
    }
}
