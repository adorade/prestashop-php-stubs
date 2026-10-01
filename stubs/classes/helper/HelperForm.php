<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
