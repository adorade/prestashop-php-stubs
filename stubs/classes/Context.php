<?php

/**
 * Class ContextCore.
 *
 * This class is responsible for holding all basic information about the environment,
 * the customer, cart, currency, language etc.
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
    /** @var \Symfony\Component\HttpFoundation\Session\SessionInterface|null */
    public $session;
    /** @var Link|null */
    public $link;
    /** @var Country|null */
    public $country;
    /** @var Employee|null */
    public $employee;
    /** @var AdminController|FrontController|\PrestaShop\PrestaShop\Core\Context\LegacyControllerContext|null */
    public $controller;
    /** @var string */
    public $override_controller_name_for_translations;
    /** @var Language|\PrestaShopBundle\Install\Language|null */
    public $language;
    /** @var Currency|null */
    public $currency;
    /**
     * Current locale instance.
     *
     * @var \PrestaShop\PrestaShop\Core\Localization\LocaleInterface|null
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
    public ?\Detection\MobileDetect $mobile_detect = \null;
    /** @var int */
    public $mode;
    /** @var \Symfony\Component\DependencyInjection\ContainerBuilder|\Symfony\Component\DependencyInjection\ContainerInterface|null */
    public $container;
    /** @var float */
    public $virtualTotalTaxExcluded = 0;
    /** @var float */
    public $virtualTotalTaxIncluded = 0;
    /** @var \PrestaShopBundle\Translation\TranslatorComponent */
    protected $translator = \null;
    /** @var int */
    protected $priceComputingPrecision = \null;
    /** Mobile device of the customer. */
    protected ?bool $mobile_device = \null;
    protected ?bool $is_mobile = \null;
    protected ?bool $is_tablet = \null;
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
    /** Sets MobileDetect tool object. */
    public function getMobileDetect(): \Detection\MobileDetect
    {
    }
    /** Checks if visitor's device is a mobile device. */
    public function isMobile(): bool
    {
    }
    /** Checks if visitor's device is a tablet device. */
    public function isTablet(): bool
    {
    }
    /**
     * @deprecated since 9.0.0 - This functionality was disabled. Function will be completely removed
     * in the next major. There is no replacement, all clients should have the same experience.
     *
     * Sets mobile_device context variable.
     */
    public function getMobileDevice(): bool
    {
    }
    /** Returns mobile device type. */
    public function getDevice(): int
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Localization\LocaleInterface|null
     */
    public function getCurrentLocale()
    {
    }
    /**
     * @deprecated since 9.0.0 - This functionality was disabled. Function will be completely removed
     * in the next major. There is no replacement, all clients should have the same experience.
     *
     * Checks if mobile context is possible.
     *
     * @return bool
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
     * Returns a ShopConstraint for the current legacy shop context.
     *
     * Mirrors Shop::getContext(): in the back office the multistore header can select a
     * shop group or all shops, and this constraint reflects that selection. In front
     * office the context is always one specific shop, so the single-shop constraint is
     * returned there — a typed alternative to passing $this->shop->id as a raw integer.
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * Returns true when the current execution is a front-office one — or cannot be proven
     * NOT to be one.
     *
     * Based on the context controller type ('front'/'modulefront') when a legacy controller
     * exists. Without one, only a POSITIVELY identified non-front execution is exempt: the
     * back-office and Admin API applications declare their app id (_PS_APP_ID_) in their
     * front controller, and the CLI has no HTTP request. Any other entry point — a module's
     * standalone script requiring config.inc.php, the legacy webservice dispatcher, a cron —
     * is treated as front office. That is the fail-closed default a confidentiality gate
     * needs: a field hidden from the front office must never leak because a script was not
     * dispatched by index.php.
     *
     * Deliberate asymmetry: the Admin API is exempted but the legacy webservice
     * (webservice/dispatcher.php, which defines _PS_API_IN_USE_ and no app id) is not, although
     * it is an authenticated admin surface too. The webservice never exposes extra properties
     * itself, so failing closed there only affects module code reading $object->extra_properties
     * during a webservice request — a behaviour change from 9.1 that belongs in the migration
     * notes. Exempting it would mean also accepting defined('_PS_API_IN_USE_') below.
     *
     * Used to decide whether extra properties must be filtered on displayFront
     * (see ExtraPropertiesBag::createForEntity()).
     *
     * @return bool
     */
    public static function isFrontOfficeContext(): bool
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
     * @return \PrestaShopBundle\Translation\TranslatorComponent
     */
    public function getTranslator($isInstaller = \false)
    {
    }
    /**
     * Returns a new instance of Translator for the provided locale code.
     *
     * @param string $locale IETF language tag (eg. "en-US")
     *
     * @return \PrestaShopBundle\Translation\TranslatorComponent
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
