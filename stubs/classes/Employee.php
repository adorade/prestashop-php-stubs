<?php

/**
 * Class EmployeeCore.
 */
class EmployeeCore extends \ObjectModel
{
    /** @var int|null Employee ID */
    public $id;
    /** @var int Employee profile */
    public $id_profile;
    /** @var int Employee language */
    public $id_lang;
    /** @var string Lastname */
    public $lastname;
    /** @var string Firstname */
    public $firstname;
    /** @var string e-mail */
    public $email;
    /** @var string Password */
    public $passwd;
    /** @var string Password */
    public $last_passwd_gen;
    public $stats_date_from;
    public $stats_date_to;
    public $stats_compare_from;
    public $stats_compare_to;
    public $stats_compare_option = 1;
    public $preselect_date_range;
    /** @var string Display back office background in the specified color */
    public $bo_color;
    public $default_tab;
    /** @var string employee's chosen theme */
    public $bo_theme;
    /** @var string employee's chosen css file */
    public $bo_css = 'theme.css';
    /** @var int employee desired screen width */
    public $bo_width;
    /** @var bool */
    public $bo_menu = \true;
    /** @var bool Status */
    public $active = \true;
    public $remote_addr;
    /* employee notifications */
    public $id_last_order;
    public $id_last_customer_message;
    public $id_last_customer;
    /** @var string|null Unique token for forgot password feature */
    public $reset_password_token;
    /** @var string|null token validity date for forgot password feature */
    public $reset_password_validity;
    /**
     * @var bool
     */
    public $has_enabled_gravatar = \false;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'employee', 'primary' => 'id_employee', 'fields' => ['lastname' => ['type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => \true, 'size' => 255], 'firstname' => ['type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => \true, 'size' => 255], 'email' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => \true, 'size' => 255], 'id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => \true], 'passwd' => ['type' => self::TYPE_STRING, 'validate' => 'isHashedPassword', 'required' => \true, 'size' => 255], 'last_passwd_gen' => ['type' => self::TYPE_STRING], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'id_profile' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'bo_color' => ['type' => self::TYPE_STRING, 'validate' => 'isColor', 'size' => 32], 'default_tab' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'bo_theme' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 32], 'bo_css' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 64], 'bo_width' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'bo_menu' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'stats_date_from' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'stats_date_to' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'stats_compare_from' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'stats_compare_to' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'stats_compare_option' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'preselect_date_range' => ['type' => self::TYPE_STRING, 'size' => 32], 'id_last_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'id_last_customer_message' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'id_last_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'reset_password_token' => ['type' => self::TYPE_STRING, 'validate' => 'isSha1', 'size' => 40, 'copy_post' => \false], 'reset_password_validity' => ['type' => self::TYPE_DATE, 'validate' => 'isDateOrNull', 'copy_post' => \false], 'has_enabled_gravatar' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    protected $webserviceParameters = ['fields' => ['id_lang' => ['xlink_resource' => 'languages'], 'last_passwd_gen' => ['setter' => \null], 'stats_date_from' => ['setter' => \null], 'stats_date_to' => ['setter' => \null], 'stats_compare_from' => ['setter' => \null], 'stats_compare_to' => ['setter' => \null], 'passwd' => ['setter' => 'setWsPasswd']]];
    protected $associated_shops = [];
    /**
     * EmployeeCore constructor.
     *
     * @param int|null $id Employee ID
     * @param int|null $idLang Language ID
     * @param int|null $idShop Shop ID
     */
    public function __construct($id = \null, $idLang = \null, $idShop = \null)
    {
    }
    /**
     * @see ObjectModel::getFields()
     *
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * Adds current Employee as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Employee has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \true)
    {
    }
    /**
     * Updates the current object in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Employee has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Update Employee text direction.
     */
    protected function updateTextDirection()
    {
    }
    /**
     * Return list of employees.
     *
     * @param bool $activeOnly Filter employee by active status
     *
     * @return array|false Employees or false
     */
    public static function getEmployees($activeOnly = \true)
    {
    }
    /**
     * Return employee instance from its e-mail (optionally check password).
     *
     * @param string $email e-mail
     * @param string $plaintextPassword Password is also checked if specified
     * @param bool $activeOnly Filter employee by active status
     *
     * @return bool|Employee|EmployeeCore Employee instance
     *                                    `false` if not found
     */
    public function getByEmail($email, $plaintextPassword = \null, $activeOnly = \true)
    {
    }
    /**
     * Check if Employee exists.
     *
     * @param string $email Employee email
     *
     * @return bool Indicates whether the Employee exists
     */
    public static function employeeExists($email)
    {
    }
    /**
     * Check if employee password is the right one.
     *
     * @param string $passwordHash Password
     *
     * @return bool result
     */
    public static function checkPassword($idEmployee, $passwordHash)
    {
    }
    /**
     * Count amount of Employees with the given Profile ID.
     *
     * @param int $idProfile Profile ID
     * @param bool $activeOnly Only active Employees
     *
     * @return false|string|null
     */
    public static function countProfile($idProfile, $activeOnly = \false)
    {
    }
    /**
     * Check if this Employee is the only SuperAdmin left.
     *
     * @return bool Indicates whether this Employee is the last one
     */
    public function isLastAdmin()
    {
    }
    /**
     * Set password
     * (for webservice).
     *
     * @param string $passwd Password
     *
     * @return bool Indicates whether the password was succesfully set
     */
    public function setWsPasswd($passwd)
    {
    }
    /**
     * Check employee informations saved into cookie and return employee validity.
     *
     * @return bool employee validity
     */
    public function isLoggedBack()
    {
    }
    /**
     * Logout.
     */
    public function logout()
    {
    }
    /**
     * Get favorite Module list.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function favoriteModulesList()
    {
    }
    /**
     * Check if the employee is associated to a specific shop.
     *
     * @param int $idShop
     *
     * @return bool
     *
     * @since 1.5.0
     */
    public function hasAuthOnShop($idShop)
    {
    }
    /**
     * Check if the employee is associated to a specific shop group.
     *
     * @param int $idShopGroup ShopGroup ID
     *
     * @return bool
     *
     * @since 1.5.0
     */
    public function hasAuthOnShopGroup($idShopGroup)
    {
    }
    /**
     * Get default id_shop with auth for current employee.
     *
     * @return int
     *
     * @since 1.5.0
     */
    public function getDefaultShopID()
    {
    }
    /**
     * Get Employees by Profile.
     *
     * @param int $idProfile Profile ID
     * @param bool $activeOnly Only active Employees
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getEmployeesByProfile($idProfile, $activeOnly = \false)
    {
    }
    /**
     * Check if current employee is super administrator.
     *
     * @return bool
     */
    public function isSuperAdmin()
    {
    }
    /**
     * Get Employee image.
     *
     * @return string Image URL
     */
    public function getImage()
    {
    }
    /**
     * Get last elements for notify.
     *
     * @param string $element
     *
     * @return int
     */
    public function getLastElementsForNotify($element)
    {
    }
    /**
     * Set last connection date.
     *
     * @param int $idEmployee Employee ID
     *
     * @return bool
     */
    public static function setLastConnectionDate($idEmployee)
    {
    }
    /**
     * Fill Reset password unique token with random sha1 and its validity date. For forgot password feature.
     */
    public function stampResetPasswordToken()
    {
    }
    /**
     * Test if a reset password token is present and is recent enough to avoid creating a new one (in case of employee triggering the forgot password link too often).
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
    /**
     * Is the Employee allowed to do the given action.
     *
     * @param string $action
     * @param string $tab
     *
     * @return bool
     */
    public function can($action, $tab)
    {
    }
    /**
     * Returns the default tab class name.
     *
     * @return string|null
     */
    public function getDefaultTabClassName()
    {
    }
}
