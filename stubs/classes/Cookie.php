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
    public const SAMESITE_NONE = 'None';
    public const SAMESITE_LAX = 'Lax';
    public const SAMESITE_STRICT = 'Strict';
    public const SAMESITE_AVAILABLE_VALUES = [self::SAMESITE_NONE => self::SAMESITE_NONE, self::SAMESITE_LAX => self::SAMESITE_LAX, self::SAMESITE_STRICT => self::SAMESITE_STRICT];
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
    /** @var SessionInterface|null */
    protected $session = \null;
    /**
     * Get data if the cookie exists and else initialize an new one.
     *
     * @param string $name Cookie name before encrypting
     * @param string $path
     */
    public function __construct($name, $path = '', $expire = \null, $shared_urls = \null, $standalone = \false, $secure = \false)
    {
    }
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
     * Soft logout, delete everything links to the customer
     * but leave there affiliate's informations.
     * As of version 1.5 don't call this function, use Customer::mylogout() instead;.
     */
    public function mylogout()
    {
    }
    public function makeNewLog()
    {
    }
    /**
     * Get cookie content.
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
     *
     * @since 1.7.0
     */
    protected function encryptAndSetCookie($cookie = \null)
    {
    }
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
     * Get a family of variables (e.g. "filter_").
     */
    public function getFamily($origin)
    {
    }
    public function unsetFamily($origin)
    {
    }
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
     * @since 1.5.0
     *
     * @return bool
     */
    public function exists()
    {
    }
    /**
     * Register a new session
     *
     * @param SessionInterface $session
     */
    public function registerSession(\PrestaShop\PrestaShop\Core\Session\SessionInterface $session)
    {
    }
    /**
     * Delete session
     *
     * @return bool
     */
    public function deleteSession()
    {
    }
    /**
     * Check if this session is still alive
     *
     * @return bool
     */
    public function isSessionAlive()
    {
    }
    /**
     * Retrieve session based on a session id and the employee or
     * customer id
     *
     * @return SessionInterface|null
     */
    public function getSession($sessionId)
    {
    }
}
