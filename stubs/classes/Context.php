<?php

/**
 * Class ContextCore.
 *
 * This class is responsible for holding all basic information about the environment,
 * the customer, cart, currency, language etc.
 *
 * @since 1.5.0.1
 */
class ContextCore
{
    /** @var Context|null */
    protected static $instance;
    /** @var Cart|null */
    public $cart;
    /** @var Customer|null */
    public $customer;
    /** @var Cookie|null */
    public $cookie;
    /** @var SessionInterface|null */
    public $session;
    /** @var Link|null */
    public $link;
    /** @var Country|null */
    public $country;
    /** @var Employee|null */
    public $employee;
    /** @var AdminController|FrontController|LegacyControllerBridgeInterface|null */
    public $controller;
    /** @var string */
    public $override_controller_name_for_translations;
    /** @var Language|InstallLanguage|null */
    public $language;
    /** @var Currency|null */
    public $currency;
    /**
     * Current locale instance.
     *
     * @var Locale|null
     */
    public $currentLocale;
    /** @var Tab */
    public $tab;
    /** @var Shop|null */
    public $shop;
    /** @var Shop */
    public $tmpOldShop;
    /** @var Smarty|null */
    public $smarty;
    /** @var Mobile_Detect */
    public $mobile_detect;
    /** @var int */
    public $mode;
    /** @var ContainerBuilder|ContainerInterface|null */
    public $container;
    /** @var float */
    public $virtualTotalTaxExcluded = 0;
    /** @var float */
    public $virtualTotalTaxIncluded = 0;
    /** @var Translator */
    protected $translator = \null;
    /** @var int */
    protected $priceComputingPrecision = \null;
    /**
     * Mobile device of the customer.
     *
     * @var bool|null
     */
    protected $mobile_device = \null;
    /** @var bool|null */
    protected $is_mobile = \null;
    /** @var bool|null */
    protected $is_tablet = \null;
    /** @var int */
    public const DEVICE_COMPUTER = 1;
    /** @var int */
    public const DEVICE_TABLET = 2;
    /** @var int */
    public const DEVICE_MOBILE = 4;
    /** @var int */
    public const MODE_STD = 1;
    /** @var int */
    public const MODE_STD_CONTRIB = 2;
    /** @var int */
    public const MODE_HOST_CONTRIB = 4;
    /** @var int */
    public const MODE_HOST = 8;
    /**
     * Sets Mobile_Detect tool object.
     *
     * @return Mobile_Detect
     */
    public function getMobileDetect()
    {
    }
    /**
     * Checks if visitor's device is a mobile device.
     *
     * @return bool
     */
    public function isMobile()
    {
    }
    /**
     * Checks if visitor's device is a tablet device.
     *
     * @return bool
     */
    public function isTablet()
    {
    }
    /**
     * Sets mobile_device context variable.
     *
     * @return bool
     */
    public function getMobileDevice()
    {
    }
    /**
     * Returns mobile device type.
     *
     * @return int
     */
    public function getDevice()
    {
    }
    /**
     * @return Locale|null
     */
    public function getCurrentLocale()
    {
    }
    /**
     * Checks if mobile context is possible.
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    protected function checkMobileContext()
    {
    }
    /**
     * Get a singleton instance of Context object.
     *
     * @return Context|null
     */
    public static function getContext()
    {
    }
    /**
     * @param Context $testInstance Unit testing purpose only
     */
    public static function setInstanceForTesting($testInstance)
    {
    }
    /**
     * Unit testing purpose only.
     */
    public static function deleteTestingInstance()
    {
    }
    /**
     * Clone current context object.
     *
     * @return static
     */
    public function cloneContext()
    {
    }
    /**
     * Updates customer in the context, updates the cookie and writes the updated cookie.
     *
     * @param Customer $customer Created customer
     */
    public function updateCustomer(\Customer $customer)
    {
    }
    /**
     * Returns a translator depending on service container availability and if the method
     * is called by the installer or not.
     *
     * @param bool $isInstaller Set to true if the method is called by the installer
     *
     * @return Translator
     */
    public function getTranslator($isInstaller = \false)
    {
    }
    /**
     * Returns a new instance of Translator for the provided locale code.
     *
     * @param string $locale IETF language tag (eg. "en-US")
     *
     * @return Translator
     */
    public function getTranslatorFromLocale($locale)
    {
    }
    /**
     * Returns directories that contain translation resources
     *
     * @return array
     */
    protected function getTranslationResourcesDirectories()
    {
    }
    /**
     * Returns the computing precision according to the current currency.
     * If previously requested, it will be stored in priceComputingPrecision property.
     *
     * @return int
     */
    public function getComputingPrecision()
    {
    }
}
