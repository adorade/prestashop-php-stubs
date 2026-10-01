<?php

namespace PrestaShopBundle\Security\Attribute;

/**
 * Forbid access to the page if Demonstration mode is enabled.
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
class DemoRestricted
{
    public function __construct(
        /**
         * The route for the redirection.
         */
        private ?string $redirectRoute = null,
        /**
         * The message of the exception.
         */
        private string $message = 'This functionality has been disabled.',
        /**
         * The translation domain for the message.
         */
        private string $domain = 'Admin.Notifications.Error',
        /**
         * The route params which are used together to generate the redirect route.
         */
        private array $redirectQueryParamsToKeep = []
    )
    {
    }
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
