<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class HelperCore
{
    public $currentIndex;
    public $table = 'configuration';
    public $identifier;
    public $token;
    public $toolbar_btn;
    public $ps_help_context;
    public $title;
    public $show_toolbar = \true;
    public $context;
    public $toolbar_scroll = \false;
    public $bootstrap = \false;
    public $className;
    public $name_controller;
    public $shopLink;
    public $allow_employee_form_lang;
    public $multiple_fieldsets;
    public $position_group_identifier;
    /** @var Module|null */
    public $module;
    /** @var string Helper tpl folder */
    public $base_folder;
    /** @var string Controller tpl folder */
    public $override_folder;
    /** @var Smarty_Internal_Template base template object */
    protected $tpl;
    /** @var string base template name */
    public $base_tpl = 'content.tpl';
    public $tpl_vars = [];
    /**
     * @var string
     */
    public $controller_name = '';
    public function __construct()
    {
    }
    public function setTpl($tpl)
    {
    }
    /**
     * Create a template from the override file, else from the base file.
     *
     * @param string $tpl_name filename
     *
     * @return Smarty_Internal_Template
     */
    public function createTemplate($tpl_name)
    {
    }
    /**
     * default behaviour for helper is to return a tpl fetched.
     *
     * @return string
     */
    public function generate()
    {
    }
    /**
     * @param array $root array with the name and ID of the tree root category, if null the Shop's root category will be used
     * @param array $selected_cat array of selected categories
     *
     * @usage
     * Format
     * Array( [0] => 1, [1] => 2)
     * OR
     * Array([1] => Array([id_category] => 1, [name] => Home page))
     *
     * @param string $input_name name of input
     * @param bool $use_radio use radio tree or checkbox tree
     * @param bool $use_search display a find category search box
     * @param array $disabled_categories
     *
     * @return string
     */
    public function renderCategoryTree($root = \null, $selected_cat = [], $input_name = 'categoryBox', $use_radio = \false, $use_search = \false, $disabled_categories = [])
    {
    }
    /**
     * Render a form with potentials required fields.
     *
     * @param string $class_name
     * @param string $identifier
     * @param array $table_fields
     *
     * @return string
     */
    public function renderRequiredFields($class_name, $identifier, $table_fields)
    {
    }
}
