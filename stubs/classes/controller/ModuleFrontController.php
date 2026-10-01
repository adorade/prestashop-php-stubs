<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class ModuleFrontControllerCore extends \FrontController
{
    /** @var Module */
    public $module;
    public function __construct()
    {
    }
    /**
     * Assigns module template for page content.
     *
     * @param string $template Template filename
     *
     * @throws PrestaShopException
     */
    public function setTemplate($template, $params = [], $locale = \null)
    {
    }
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
    }
    /**
     * Non-static translation method for frontoffice modules.
     *
     * @deprecated use Context::getContext()->getTranslator()->trans($id, $parameters, $domain, $locale); instead
     *
     * @param string $string Term or expression in english
     * @param false|string $specific Specific name, only for ModuleFrontController
     * @param string|null $class Name of the class
     * @param bool $addslashes If set to true, the return value will pass through addslashes(). Otherwise, stripslashes()
     * @param bool $htmlentities If set to true(default), the return value will pass through htmlentities($string, ENT_QUOTES, 'utf-8')
     *
     * @return string The translation if available, or the english default text
     */
    protected function l($string, $specific = \false, $class = \null, $addslashes = \false, $htmlentities = \true)
    {
    }
}
