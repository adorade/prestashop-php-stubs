<?php

namespace PrestaShopBundle\Security\Annotation;

/**
 * Improves the existing Security annotation, adding:
 * `domain`: to translate the sent message using a PrestaShop domain;
 * `redirectRoute`: to select the route for redirection;
 * `url`: only available in 1.7.x, to redirect to legacy pages;.
 *
 * @Annotation
 */
class AdminSecurity extends \Sensio\Bundle\FrameworkExtraBundle\Configuration\Security
{
    /**
     * The translation domain for the message.
     *
     * @var string
     */
    protected $domain = 'Admin.Notifications.Error';
    /**
     * The route for the redirection.
     *
     * @todo: Once the onboarding page is migrated, set default to his route name.
     *
     * @var string|null
     */
    protected $redirectRoute;
    /**
     * @deprecated once the back office is migrated, rely only on route.
     * The url for the redirection
     *
     * @return string
     */
    protected $url = 'admin_domain';
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
     * @return mixed
     */
    public function getUrl()
    {
    }
    /**
     * @param string $url the url used for redirection
     */
    public function setUrl($url)
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
