<?php

abstract class PaymentModuleCore extends \Module
{
    /** @var int Current order's id */
    public $currentOrder;
    public $currentOrderReference;
    public $currencies = \true;
    public $currencies_mode = 'checkbox';
    public const DEBUG_MODE = \false;
    /** @var MailPartialTemplateRenderer|null */
    protected $partialRenderer;
    public function install()
    {
    }
    public function uninstall()
    {
    }
    /**
     * Add checkbox currency restrictions for a new module.
     *
     * @param array $shops
     *
     * @return bool
     */
    public function addCheckboxCurrencyRestrictionsForModule(array $shops = [])
    {
    }
    /**
     * Add radio currency restrictions for a new module.
     *
     * @param array $shops
     *
     * @return bool
     */
    public function addRadioCurrencyRestrictionsForModule(array $shops = [])
    {
    }
    /**
     * Add checkbox country restrictions for a new module.
     *
     * @param array $shops
     *
     * @return bool
     */
    public function addCheckboxCountryRestrictionsForModule(array $shops = [])
    {
    }
    /**
     * Add checkbox carrier restrictions for a new module.
     *
     * @param array $shops
     *
     * @return bool
     */
    public function addCheckboxCarrierRestrictionsForModule(array $shops = [])
    {
    }
    /**
     * Validate an order in database
     * Function called from a payment module.
     *
     * @param int $id_cart
     * @param int $id_order_state
     * @param float $amount_paid Amount really paid by customer (in the default currency)
     * @param string $payment_method Payment method (eg. 'Credit card')
     * @param string|null $message Message to attach to order
     * @param array $extra_vars
     * @param int|null $currency_special
     * @param bool $dont_touch_amount
     * @param string|bool $secure_key
     * @param Shop $shop
     * @param string|null $order_reference if this parameter is not provided, a random order reference will be generated
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function validateOrder($id_cart, $id_order_state, $amount_paid, $payment_method = 'Unknown', $message = \null, $extra_vars = [], $currency_special = \null, $dont_touch_amount = \false, $secure_key = \false, \Shop $shop = \null, ?string $order_reference = \null)
    {
    }
    /**
     * @param Address $the_address that needs to be txt formatted
     *
     * @return string the txt formatted address block
     */
    protected function _getTxtFormatedAddress($the_address)
    {
    }
    /**
     * @param Address $the_address that needs to be txt formatted
     * @param string $line_sep
     * @param array $fields_style
     *
     * @return string the txt formated address block
     */
    protected function _getFormatedAddress(\Address $the_address, $line_sep, $fields_style = [])
    {
    }
    /**
     * @param int $current_id_currency
     *
     * @return Currency|array|false
     */
    public function getCurrency($current_id_currency = \null)
    {
    }
    /**
     * Allows specified payment modules to be used by a specific currency.
     *
     * @since 1.4.5
     *
     * @param int $id_currency
     * @param array $id_module_list
     *
     * @return bool
     */
    public static function addCurrencyPermissions($id_currency, array $id_module_list = [])
    {
    }
    /**
     * List all installed and active payment modules.
     *
     * @see Module::getPaymentModules() if you need a list of module related to the user context
     * @since 1.4.5
     *
     * @return array module information
     */
    public static function getInstalledPaymentModules()
    {
    }
    public static function preCall($module_name)
    {
    }
    /**
     * @return MailPartialTemplateRenderer
     */
    protected function getPartialRenderer()
    {
    }
    /**
     * Fetch the content of $template_name inside the folder
     * current_theme/mails/current_iso_lang/ if found, otherwise in
     * mails/current_iso_lang.
     *
     * @param string $template_name template name with extension
     * @param int $mail_type Mail::TYPE_HTML or Mail::TYPE_TEXT
     * @param array $var sent to smarty as 'list'
     *
     * @return string
     */
    protected function getEmailTemplateContent($template_name, $mail_type, $var)
    {
    }
    protected function createOrderFromCart(\Cart $cart, \Currency $currency, $productList, $addressId, $context, $reference, $secure_key, $payment_method, $name, $dont_touch_amount, $amount_paid, $warehouseId, $cart_total_paid, $debug, $order_status, $id_order_state, $carrierId = \null)
    {
    }
    protected function createOrderCartRules(\Order $order, \Cart $cart, $order_list, $total_reduction_value_ti, $total_reduction_value_tex, $id_order_state)
    {
    }
}
