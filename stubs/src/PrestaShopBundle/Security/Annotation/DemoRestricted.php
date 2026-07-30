<?php

namespace PrestaShopBundle\Security\Annotation;

/**
 * Forbid access to the page if Demonstration mode is enabled.
 *
 * @Annotation
 */
class DemoRestricted extends \Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationAnnotation
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
    protected $message = 'This functionality has been disabled.';
    /**
     * The route for the redirection.
     *
     * @var string
     */
    protected $redirectRoute;
    /**
     * The route params which are used together to generate the redirect route.
     *
     * @var array
     */
    protected $redirectQueryParamsToKeep = [];
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
     * @return string
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
     * Returns whether multiple annotations of this type are allowed.
     *
     * @return bool
     */
    public function allowArray()
    {
    }
    /**
     * @return array
     */
    public function getRedirectQueryParamsToKeep()
    {
    }
    /**
     * @param array $redirectQueryParamsToKeep
     */
    public function setRedirectQueryParamsToKeep($redirectQueryParamsToKeep)
    {
    }
}
