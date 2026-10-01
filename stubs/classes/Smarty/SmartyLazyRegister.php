<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Used to delay loading of external classes with smarty->register_plugin.
 */
class SmartyLazyRegister
{
    protected $registry = [];
    protected static $instances = [];
    /**
     * Register a function or method to be dynamically called later.
     *
     * @param string|array $params function name or array(object name, method name)
     */
    public function register($params)
    {
    }
    public function isRegistered($params)
    {
    }
    /**
     * Dynamically call static function or method.
     *
     * @param string $name function name
     * @param mixed $arguments function argument
     *
     * @return mixed function return
     */
    public function __call($name, $arguments)
    {
    }
    public static function getInstance($smarty)
    {
    }
}
