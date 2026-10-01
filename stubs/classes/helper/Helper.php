<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
