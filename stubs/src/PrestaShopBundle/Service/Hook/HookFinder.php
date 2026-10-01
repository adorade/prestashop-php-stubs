<?php

namespace PrestaShopBundle\Service\Hook;

/**
 * This class declares the functions needed to get structured data
 * from the modules, by asking them to follow a specific class.
 */
class HookFinder
{
    /**
     * In order to not return wrong things to the caller, we ask for an
     * instance of specific classes.
     * Please note it must implement the function toArray().
     *
     * @var array<int, string>
     */
    protected $expectedInstanceClasses = [];
    /**
     * Because we cannot send the same parameters between two different finders,
     * we need a attribute. It will be sent to the Hook::exec() function.
     *
     * @var array
     */
    protected $params = [];
    /**
     * The hook to call.
     *
     * @var string
     */
    protected $hookName;
    /**
     * Execute hook specified in params and check if the result matches the expected classes if asked.
     *
     * @return array Content returned by modules
     *
     * @throws \Exception if class doesn't match interface or expected classes
     */
    public function find()
    {
    }
    /**
     * Present all extra content for templates, meaning converting them as arrays.
     *
     * @return array
     */
    public function present()
    {
    }
    /**
     * This array contains all the classes expected to be returned
     * by the modules on Hook::exec.
     *
     * @return array
     */
    public function getExpectedInstanceClasses()
    {
    }
    /**
     * The hook going to be called when firing find().
     *
     * @return string
     */
    public function getHookName()
    {
    }
    /**
     * The $params sent to Hook::exec().
     *
     * @return array
     */
    public function getParams()
    {
    }
    /**
     * Add an instance of class to be returned by the hook without
     * erasing the other values.
     *
     * @param string|array $expectedInstanceClasses
     *
     * @return self
     */
    public function addExpectedInstanceClasses($expectedInstanceClasses)
    {
    }
    /**
     * Replace all expected classes and types.
     *
     * @param array $expectedInstanceClasses
     *
     * @return self
     */
    public function setExpectedInstanceClasses($expectedInstanceClasses)
    {
    }
    /**
     * Change the hook to be called.
     *
     * @param string $hookName
     *
     * @return self
     */
    public function setHookName($hookName)
    {
    }
    /**
     * Add a hook param without erasing all the other values.
     *
     * @param array $params
     *
     * @return self
     */
    public function addParams($params)
    {
    }
    /**
     * Replace the params array.
     *
     * @param array $params
     *
     * @return self
     */
    public function setParams($params)
    {
    }
}
