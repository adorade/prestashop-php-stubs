<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * This adapter will complete the new architecture Context with legacy values.
 * A merge is done, but the legacy values will be transferred to the new Context
 * during legacy refactoring.
 */
class LegacyContext
{
    /** @var \Context */
    protected static $instance = null;
    /**
     * @param string|null $mailThemesUri
     * @param Tools|null $tools
     */
    public function __construct($mailThemesUri = null, ?\PrestaShop\PrestaShop\Adapter\Tools $tools = null)
    {
    }
    /**
     * To be used only in Adapters. Should not been called by Core classes. Prefer to use Core\context class,
     * that will contains all you need in the Core architecture.
     *
     * @return \Context|null the Legacy context, for Adapter use only
     *
     * @throws \Symfony\Component\Process\Exception\LogicException If legacy context is not set properly
     */
    public function getContext()
    {
    }
    /**
     * Get smarty instance from legacy context.
     *
     * @return \Smarty
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
     * @param array $extraParams
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
     * Returns the language the current employee last selected in a translatable form, if any.
     *
     * Read through this adapter rather than straight from the cookie in the container bindings:
     * the legacy cookie is only set by config/config.inc.php, so it is absent from the installer
     * context, where form types are nevertheless built (an extra property definition validates
     * its form options when it is registered by a module install).
     *
     * @return int|string|null the raw cookie value, null when there is no legacy cookie
     */
    public function getEmployeeFormLanguageId()
    {
    }
    /**
     * Returns Currency set for the current employee.
     *
     * @return \Currency|null
     */
    public function getEmployeeCurrency()
    {
    }
    /**
     * @return \Language
     */
    public function getLanguage()
    {
    }
    /**
     * Get employee's default tab name.
     *
     * @return string Default tab name for employee
     *
     * @throws \RuntimeException Throws exception if employee does not exist in context
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
     * @param \Context $testInstance
     *                              Unit testing purpose only
     */
    public static function setInstanceForTesting(\Context $testInstance)
    {
    }
}
