<?php

namespace PrestaShopBundle\Security\Annotation;

/**
 * Forbid access to the page if the defined module mode is inactive.
 *
 * @Annotation
 */
class ModuleActivated extends \Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationAnnotation
{
    /**
     * The translation domain for the message.
     *
     * @var string
     */
    protected $domain = 'Admin.Notifications.Error';
    /**
     * The message of the exception.
     *
     * @var string
     */
    protected $message = 'The module %s is inactive.';
    /**
     * The route for the redirection.
     *
     * @var string|null
     */
    protected $redirectRoute;
    /**
     * The module name to check.
     *
     * @var string|null
     */
    protected $moduleName;
    /**
     * @return string
     */
    public function getDomain()
    {
    }
    /**
     * @param string $domain the translation domain name
     */
    public function setDomain($domain)
    {
    }
    /**
     * @return string
     */
    public function getMessage()
    {
    }
    /**
     * @param string $message the message displayed after redirection
     */
    public function setMessage($message)
    {
    }
    /**
     * @return string|null
     */
    public function getRedirectRoute()
    {
    }
    /**
     * @param string $redirectRoute the route used for redirection
     */
    public function setRedirectRoute($redirectRoute)
    {
    }
    /**
     * Returns the alias name for an annotated configuration.
     *
     * @return string
     */
    public function getAliasName()
    {
    }
    /**
     * Returns the name of the module to check.
     *
     * @return string|null
     */
    public function getModuleName()
    {
    }
    /**
     * @param string $moduleName
     */
    public function setModuleName($moduleName)
    {
    }
    /**
     * Returns whether multiple annotations of this type are allowed.
     *
     * @return bool
     */
    public function allowArray()
    {
    }
}
