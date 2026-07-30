<?php

/***
 * Class CustomerCore
 */
class CustomerCore extends \ObjectModel
{
    /** @var int Customer ID */
    public $id;
    /** @var int Shop ID */
    public $id_shop;
    /** @var int ShopGroup ID */
    public $id_shop_group;
    /** @var string Secure key */
    public $secure_key;
    /** @var string protected note */
    public $note;
    /** @var int Gender ID */
    public $id_gender = 0;
    /** @var int Default group ID */
    public $id_default_group;
    /** @var int Current language used by the customer */
    public $id_lang;
    /** @var string Lastname */
    public $lastname;
    /** @var string Firstname */
    public $firstname;
    /** @var string Birthday (yyyy-mm-dd) */
    public $birthday = \null;
    /** @var string e-mail */
    public $email;
    /** @var bool Newsletter subscription */
    public $newsletter;
    /** @var string Newsletter ip registration */
    public $ip_registration_newsletter;
    /** @var string Newsletter registration date */
    public $newsletter_date_add;
    /** @var bool Opt-in subscription */
    public $optin;
    /** @var string WebSite * */
    public $website;
    /** @var string Company */
    public $company;
    /** @var string SIRET */
    public $siret;
    /** @var string APE */
    public $ape;
    /** @var float Outstanding allow amount (B2B opt) */
    public $outstanding_allow_amount = 0;
    /** @var int Show public prices (B2B opt) */
    public $show_public_prices = 0;
    /** @var int Risk ID (B2B opt) */
    public $id_risk;
    /** @var int Max payment day */
    public $max_payment_days = 0;
    /** @var string Password */
    public $passwd;
    /** @var string Datetime Password */
    public $last_passwd_gen;
    /** @var bool Status */
    public $active = \true;
    /** @var bool Status */
    public $is_guest = \false;
    /** @var bool True if carrier has been deleted (staying in database as deleted) */
    public $deleted = \false;
    /** @var string|null Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    public $years;
    public $days;
    public $months;
    /** @var int customer id_country as determined by geolocation */
    public $geoloc_id_country;
    /** @var int customer id_state as determined by geolocation */
    public $geoloc_id_state;
    /** @var string customer postcode as determined by geolocation */
    public $geoloc_postcode;
    /** @var bool is the customer logged in */
    public $logged = \false;
    /** @var int id_guest meaning the guest table, not the guest customer */
    public $id_guest;
    public $groupBox;
    /** @var string|null Unique token for forgot password feature */
    public $reset_password_token;
    /** @var string|null token validity date for forgot password feature */
    public $reset_password_validity;
    protected $webserviceParameters = ['objectMethods' => ['add' => 'addWs', 'update' => 'updateWs'], 'fields' => ['id_default_group' => ['xlink_resource' => 'groups'], 'id_lang' => ['xlink_resource' => 'languages'], 'newsletter_date_add' => [], 'ip_registration_newsletter' => [], 'last_passwd_gen' => ['setter' => \null], 'secure_key' => ['setter' => \null], 'deleted' => [], 'passwd' => ['setter' => 'setWsPasswd']], 'associations' => ['groups' => ['resource' => 'group']]];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'customer', 'primary' => 'id_customer', 'fields' => ['secure_key' => ['type' => self::TYPE_STRING, 'validate' => 'isMd5', 'copy_post' => \false], 'lastname' => ['type' => self::TYPE_STRING, 'validate' => 'isCustomerName', 'required' => \true, 'size' => 255], 'firstname' => ['type' => self::TYPE_STRING, 'validate' => 'isCustomerName', 'required' => \true, 'size' => 255], 'email' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => \true, 'size' => 255], 'passwd' => ['type' => self::TYPE_STRING, 'validate' => 'isHashedPassword', 'required' => \true, 'size' => 255], 'last_passwd_gen' => ['type' => self::TYPE_STRING, 'copy_post' => \false], 'id_gender' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'birthday' => ['type' => self::TYPE_DATE, 'validate' => 'isBirthDate'], 'newsletter' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'newsletter_date_add' => ['type' => self::TYPE_DATE, 'copy_post' => \false], 'ip_registration_newsletter' => ['type' => self::TYPE_STRING, 'copy_post' => \false], 'optin' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'website' => ['type' => self::TYPE_STRING, 'validate' => 'isUrl'], 'company' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'], 'siret' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'], 'ape' => ['type' => self::TYPE_STRING, 'validate' => 'isApe'], 'outstanding_allow_amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'copy_post' => \false], 'show_public_prices' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => \false], 'id_risk' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'copy_post' => \false], 'max_payment_days' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'copy_post' => \false], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => \false], 'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => \false], 'note' => ['type' => self::TYPE_HTML, 'size' => 4194303, 'copy_post' => \false], 'is_guest' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => \false], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => \false], 'id_shop_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => \false], 'id_default_group' => ['type' => self::TYPE_INT, 'copy_post' => \false], 'id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => \false], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => \false], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => \false], 'reset_password_token' => ['type' => self::TYPE_STRING, 'validate' => 'isSha1', 'size' => 40, 'copy_post' => \false], 'reset_password_validity' => ['type' => self::TYPE_DATE, 'validate' => 'isDateOrNull', 'copy_post' => \false]]];
    protected static $_defaultGroupId = [];
    protected static $_customerHasAddress = [];
    protected static $_customer_groups = [];
    /**
     * CustomerCore constructor.
     *
     * @param int|null $id
     */
    public function __construct($id = \null)
    {
    }
    /**
     * Adds current Customer as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Customer has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \true)
    {
    }
    /**
     * Adds current Customer as a new Object to the database.
     *
     * @param bool $autodate Automatically set `date_upd` and `date_add` columns
     * @param bool $null_values Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Customer has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function addWs($autodate = \true, $null_values = \false)
    {
    }
    /**
     * Updates the current Customer in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Customer has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Updates the current Customer in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Customer has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function updateWs($nullValues = \false)
    {
    }
    /**
     * Deletes current Customer from the database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Return customers list.
     *
     * @param bool|null $onlyActive Returns only active customers when `true`
     *
     * @return array Customers
     */
    public static function getCustomers($onlyActive = \null)
    {
    }
    /**
     * Return customer instance from its e-mail (optionally check password).
     *
     * @param string $email e-mail
     * @param string $plaintextPassword Password is also checked if specified
     * @param bool $ignoreGuest to ignore guest customers
     *
     * @return bool|Customer|CustomerCore Customer instance
     *
     * @throws \InvalidArgumentException if given input is not valid
     */
    public function getByEmail($email, $plaintextPassword = \null, $ignoreGuest = \true)
    {
    }
    /**
     * Retrieve customers by email address.
     *
     * @param string $email
     *
     * @return array Customers
     */
    public static function getCustomersByEmail($email)
    {
    }
    /**
     * Check id the customer is active or not.
     *
     * @param int $idCustomer
     *
     * @return bool Customer validity
     */
    public static function isBanned($idCustomer)
    {
    }
    /**
     * Check if e-mail is already registered in database.
     *
     * @param string $email e-mail
     * @param bool $returnId If true the method returns the Customer ID, or boolean
     * @param bool $ignoreGuest to ignore guest customers
     *
     * @return bool|int Customer ID if found
     *                  `false` otherwise
     */
    public static function customerExists($email, $returnId = \false, $ignoreGuest = \true)
    {
    }
    /**
     * Check if an address is owned by a customer.
     *
     * @param int $idCustomer Customer ID
     * @param int $idAddress Address ID
     *
     * @return bool result
     */
    public static function customerHasAddress($idCustomer, $idAddress)
    {
    }
    public static function resetStaticCache()
    {
    }
    /**
     * Reset Address cache.
     *
     * @param int $idCustomer Customer ID
     * @param int $idAddress Address ID
     */
    public static function resetAddressCache($idCustomer = \null, $idAddress = \null)
    {
    }
    /**
     * Return customer addresses.
     *
     * @param int $idLang Language ID
     *
     * @return array Addresses
     */
    public function getAddresses($idLang)
    {
    }
    /**
     * Get simplified Addresses arrays.
     *
     * @param int|null $idLang Language ID
     *
     * @return array
     */
    public function getSimpleAddresses($idLang = \null)
    {
    }
    /**
     * Get Address as array.
     *
     * @param int $idAddress Address ID
     * @param int|null $idLang Language ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getSimpleAddress($idAddress, $idLang = \null)
    {
    }
    /**
     * Get SQL query to retrieve Address in an array.
     *
     * @param int|null $idAddress Address ID
     * @param int|null $idLang Language ID
     *
     * @return string
     */
    public function getSimpleAddressSql($idAddress = \null, $idLang = \null)
    {
    }
    /**
     * Count the number of addresses for a customer.
     *
     * @param int $idCustomer Customer ID
     *
     * @return int Number of addresses
     */
    public static function getAddressesTotalById($idCustomer)
    {
    }
    /**
     * Check if customer password is the right one.
     *
     * @param int $idCustomer Customer ID
     * @param string $passwordHash Hashed password
     *
     * @return bool result
     */
    public static function checkPassword($idCustomer, $passwordHash)
    {
    }
    /**
     * Light back office search for customers.
     *
     * @param string $query Searched string
     * @param int|null $limit Limit query results
     * @param ShopConstraint|null $shopConstraint provide specific shop constraint or else it will use context shops for search
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null Corresponding customers
     *
     * @throws PrestaShopDatabaseException
     */
    public static function searchByName($query, $limit = \null, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = \null)
    {
    }
    /**
     * Search for customers by ip address.
     *
     * @param string $ip Searched string
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function searchByIp($ip)
    {
    }
    /**
     * Return several useful statistics about customer.
     *
     * @return array Stats
     */
    public function getStats()
    {
    }
    /**
     * Get last 10 emails sent to the Customer.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getLastEmails()
    {
    }
    /**
     * Get last 10 Connections of the Customer.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getLastConnections()
    {
    }
    /**
     * Check if Customer ID exists.
     *
     * @param int $idCustomer Customer ID
     *
     * @return int|null Customer ID if found
     */
    public static function customerIdExistsStatic($idCustomer)
    {
    }
    /**
     * Update customer groups associated to the object.
     *
     * @param array $list groups
     */
    public function updateGroup($list)
    {
    }
    /**
     * Remove this Customer ID from Customer Groups.
     *
     * @return bool Indicates whether the Customer ID has been successfully removed
     *              from the Customer Group Db table
     */
    public function cleanGroups()
    {
    }
    /**
     * Add the Customer to the given Customer Groups.
     *
     * @param array $groups Customer Group IDs
     */
    public function addGroups($groups)
    {
    }
    /**
     * Get Groups that have the given Customer ID.
     *
     * @param int $idCustomer Customer ID
     *
     * @return array|mixed
     */
    public static function getGroupsStatic($idCustomer)
    {
    }
    /**
     * Get Groups of this Customer
     *
     * @return array|mixed
     */
    public function getGroups()
    {
    }
    /**
     * Get Products bought by this Customer.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getBoughtProducts()
    {
    }
    /**
     * Get Default Customer Group ID.
     *
     * @param int $idCustomer Customer ID
     *
     * @return mixed|string|null
     */
    public static function getDefaultGroupId($idCustomer)
    {
    }
    /**
     * Get current country or default country
     *
     * @param int $idCustomer
     * @param Cart|null $cart
     *
     * @return int Country ID
     */
    public static function getCurrentCountry($idCustomer, \Cart $cart = \null)
    {
    }
    /**
     * Is the current Customer a Guest?
     *
     * @return bool Indicates whether the Customer is a Guest
     */
    public function isGuest()
    {
    }
    /**
     * Transform the Guest to a Customer.
     *
     * @param int $idLang Language ID
     * @param string|null $password Password
     *
     * @return bool Indicates if a process has been successful
     */
    public function transformToCustomer($idLang, $password = \null)
    {
    }
    /**
     * Set password
     * (for webservice).
     *
     * @param string $passwd Password
     *
     * @return bool Indictes whether the password has been successfully set
     */
    public function setWsPasswd($passwd)
    {
    }
    /**
     * Check customer information and return customer validity.
     *
     * @since 1.5.0
     *
     * @param bool $withGuest
     *
     * @return bool customer validity
     */
    public function isLogged($withGuest = \false)
    {
    }
    /**
     * Logout.
     *
     * @since 1.5.0
     */
    public function logout()
    {
    }
    /**
     * Soft logout, delete everything that links to the customer
     * but leave there affiliate's information.
     *
     * @since 1.5.0
     */
    public function mylogout()
    {
    }
    /**
     * Get last empty Cart for this Customer, when last cart is not empty return false.
     *
     * @param bool|true $withOrder Only return a Cart that have been converted into an Order
     *
     * @return bool|int
     */
    public function getLastEmptyCart($withOrder = \true)
    {
    }
    /**
     * Validate controller and check password
     *
     * @param bool $htmlentities
     *
     * @return array
     *
     * @deprecated 8.1.0 The password check has been moved in controllers and this method is not called anywhere since 1.7.0
     */
    public function validateController($htmlentities = \true)
    {
    }
    /**
     * Get outstanding amount.
     *
     * @return float Outstanding amount
     */
    public function getOutstanding()
    {
    }
    /**
     * Get Customer Groups
     * (for webservice).
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWsGroups()
    {
    }
    /**
     * Set Customer Groups
     * (for webservice).
     *
     * @param array $result
     *
     * @return bool
     */
    public function setWsGroups($result)
    {
    }
    /**
     * @see ObjectModel::getWebserviceObjectList()
     */
    public function getWebserviceObjectList($sqlJoin, $sqlFilter, $sqlSort, $sqlLimit)
    {
    }
    /**
     * Fill Reset password unique token with random sha1 and its validity date. For forgot password feature.
     */
    public function stampResetPasswordToken()
    {
    }
    /**
     * Test if a reset password token is present and is recent enough to avoid creating a new one (in case of customer triggering the forgot password link too often).
     */
    public function hasRecentResetPasswordToken()
    {
    }
    /**
     * Returns the valid reset password token if it validity date is > now().
     */
    public function getValidResetPasswordToken()
    {
    }
    /**
     * Delete reset password token data.
     */
    public function removeResetPasswordToken()
    {
    }
}
