<?php

/**
 * @property bool $detect_language
 * @property int $id_customer
 * @property int $id_employee
 * @property int $id_lang
 * @property int $id_guest
 * @property int|null $id_connections
 * @property bool $is_guest
 * @property bool $logged
 * @property string $passwd
 * @property int $session_id
 * @property string $session_token
 * @property string $shopContext
 * @property int $last_activity
 */
class CookieCore
{
    /**
     * @deprecated since 9.0 use CookieOptions constants instead.
     */
    public const SAMESITE_NONE = \PrestaShop\PrestaShop\Core\Http\CookieOptions::SAMESITE_NONE;
    /**
     * @deprecated since 9.0 use CookieOptions constants instead.
     */
    public const SAMESITE_LAX = \PrestaShop\PrestaShop\Core\Http\CookieOptions::SAMESITE_LAX;
    /**
     * @deprecated since 9.0 use CookieOptions constants instead.
     */
    public const SAMESITE_STRICT = \PrestaShop\PrestaShop\Core\Http\CookieOptions::SAMESITE_STRICT;
    /**
     * @deprecated since 9.0 use CookieOptions constants instead.
     */
    public const SAMESITE_AVAILABLE_VALUES = \PrestaShop\PrestaShop\Core\Http\CookieOptions::SAMESITE_AVAILABLE_VALUES;
    /** @var array Contain cookie content in a key => value format */
    protected $_content = [];
    /** @var string Crypted cookie name for setcookie() */
    protected $_name;
    /** @var int expiration date for setcookie() */
    protected $_expire;
    /** @var bool|string Website domain for setcookie() */
    protected $_domain;
    /** @var string|bool SameSite for setcookie() */
    protected $_sameSite;
    /** @var string Path for setcookie() */
    protected $_path;
    /** @var PhpEncryption cipher tool instance */
    protected $cipherTool;
    protected $_modified = \false;
    protected $_allow_writing;
    protected $_salt;
    protected $_standalone;
    /** @var bool */
    protected $_secure = \false;
    /** @var \PrestaShop\PrestaShop\Core\Session\SessionInterface|null */
    protected $session = \null;
    /**
     * Get data if the cookie exists and else initialize an new one.
     *
     * @param string $name Cookie name before encrypting
     * @param string $path Cookie path
     * @param int|null $expire Cookie expiration time (default: 20 days from now)
     * @param array|null $shared_urls Array of shared URLs for domain calculation
     * @param bool $standalone Whether this is a standalone cookie (ie. the cookie is self-contained and not dependent on PrestaShop's context)
     * @param bool $secure Whether the cookie should be secure (HTTPS only)
     */
    public function __construct($name, $path = '', $expire = \null, $shared_urls = \null, $standalone = \false, $secure = \false)
    {
    }
    /**
     * Disable cookie writing.
     * Prevents the cookie from being written to the browser.
     */
    public function disallowWriting()
    {
    }
    /**
     * @param array|null $shared_urls
     *
     * @return bool|string
     */
    protected function getDomain($shared_urls = \null)
    {
    }
    /**
     * Set expiration date.
     *
     * @param int $expire Expiration time from now
     */
    public function setExpire($expire)
    {
    }
    /**
     * Magic method wich return cookie data from _content array.
     *
     * @param string $key key wanted
     *
     * @return string value corresponding to the key
     */
    public function __get($key)
    {
    }
    /**
     * Magic method which check if key exists in the cookie.
     *
     * @param string $key key wanted
     *
     * @return bool key existence
     */
    public function __isset($key)
    {
    }
    /**
     * Magic method which adds data into _content array.
     *
     * @param string $key Access key for the value
     * @param mixed $value Value corresponding to the key
     *
     * @throws Exception
     */
    public function __set($key, $value)
    {
    }
    /**
     * Magic method which delete data into _content array.
     *
     * @param string $key key wanted
     */
    public function __unset($key)
    {
    }
    /**
     * Delete cookie
     * As of version 1.5 don't call this function, use Customer::logout() or Employee::logout() instead;.
     */
    public function logout()
    {
    }
    /**
     * Soft logout, delete everything linked to the customer
     * but leave their affiliate's informations intact.
     * As of version 1.5 don't call this function, use Customer::mylogout() instead;.
     */
    public function mylogout()
    {
    }
    /**
     * Create a new guest log entry.
     * Removes current customer and guest IDs and creates a new guest session.
     */
    public function makeNewLog()
    {
    }
    /**
     * Get cookie content and update internal data.
     * Decrypts and validates the cookie content, handles checksum verification.
     *
     * @param bool $nullValues Whether to handle null values
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Encrypt and set the Cookie.
     *
     * @param string|null $cookie Cookie content
     *
     * @return bool Indicates whether the Cookie was successfully set
     */
    protected function encryptAndSetCookie($cookie = \null)
    {
    }
    /**
     * Destructor.
     * Automatically saves the cookie when the object is destroyed.
     */
    public function __destruct()
    {
    }
    /**
     * Save cookie with setcookie().
     */
    public function write()
    {
    }
    /**
     * Get a family of variables with a common prefix (e.g. "filter_").
     *
     * @param string $origin The prefix to search for
     *
     * @return array Array of key-value pairs matching the prefix
     */
    public function getFamily($origin)
    {
    }
    /**
     * Remove a family of variables with a common prefix.
     *
     * @param string $origin The prefix of variables to remove
     */
    public function unsetFamily($origin)
    {
    }
    /**
     * Get all cookie content.
     *
     * @return array All cookie data as key-value pairs
     */
    public function getAll()
    {
    }
    /**
     * @return string name of cookie
     */
    public function getName()
    {
    }
    /**
     * Check if the cookie exists.
     *
     * @return bool
     */
    public function exists()
    {
    }
    /**
     * Register a new session for the current user.
     *
     * @param \PrestaShop\PrestaShop\Core\Session\SessionInterface $session The session object to register
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException If no valid user ID is found
     */
    public function registerSession(\PrestaShop\PrestaShop\Core\Session\SessionInterface $session)
    {
    }
    /**
     * Delete the current session.
     * Removes the session if it exists.
     *
     * @return bool True if session was deleted, false if no session exists
     */
    public function deleteSession()
    {
    }
    /**
     * Check if the current session is still alive and valid.
     * Verifies session ID, token, and user ID match.
     *
     * @return bool True if session is valid and alive
     */
    public function isSessionAlive()
    {
    }
    /**
     * Retrieve session based on a session ID and the employee or customer ID
     * Creates appropriate session object (Employee or Customer) and updates its timestamp.
     *
     * @param int $sessionId The session ID to retrieve
     *
     * @return \PrestaShop\PrestaShop\Core\Session\SessionInterface|null The session object or null if not found
     */
    public function getSession($sessionId)
    {
    }
}
