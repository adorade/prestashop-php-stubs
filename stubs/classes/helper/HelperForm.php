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
/**
 * @since 1.5.0
 */
class HelperFormCore extends \Helper
{
    public $id;
    public $first_call = \true;
    /** @var array of forms fields */
    protected $fields_form = [];
    /** @var array values of form fields */
    public $fields_value = [];
    public $name_controller = '';
    /** @var string if not null, a title will be added on that list */
    public $title = \null;
    /** @var string Used to override default 'submitAdd' parameter in form action attribute */
    public $submit_action;
    public $token;
    public $languages = \null;
    public $default_form_language = \null;
    public $allow_employee_form_lang = \null;
    public $show_cancel_button = \false;
    public $back_url = '#';
    public function __construct()
    {
    }
    public function generateForm($fields_form)
    {
    }
    public function generate()
    {
    }
    /**
     * Return true if there are required fields.
     */
    public function getFieldsRequired()
    {
    }
    /**
     * Render an area to determinate shop association.
     *
     * @return string
     */
    public function renderAssoShop($disable_shared = \false, $template_directory = \null)
    {
    }
}
