<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
abstract class ModuleAdminControllerCore extends \AdminController
{
    /** @var Module */
    public $module;
    /**
     * @throws PrestaShopException
     */
    public function __construct()
    {
    }
    /**
     * Creates a template object.
     *
     * @param string $tpl_name Template filename
     *
     * @return Smarty_Internal_Template
     */
    public function createTemplate($tpl_name)
    {
    }
    /**
     * Get path to back office templates for the module.
     *
     * @return string
     */
    public function getTemplatePath()
    {
    }
    /**
     * @return string[]
     */
    protected function getTemplateLookupPaths()
    {
    }
}
