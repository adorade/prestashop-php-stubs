<?php

namespace PrestaShop\PrestaShop\Core\Webservice;

/**
 * Looks at server configuration in order to check if PrestaShop's Webservice feature can be enabled.
 */
final class ServerRequirementsChecker implements \PrestaShop\PrestaShop\Core\Webservice\ServerRequirementsCheckerInterface
{
    public const ISSUE_APACHE_MOD_AUTH_BASIC_NOT_AVAILABLE = 'issue_apache_mod_auth_basic_not_available';
    public const ISSUE_APACHE_MOD_AUTH_REWRITE_NOT_AVAILABLE = 'issue_apache_mod_auth_rewrite_not_available';
    public const ISSUE_EXT_SIMPLEXML_NOT_AVAILABLE = 'issue_ext_simplexml_not_available';
    public const ISSUE_HTTPS_NOT_AVAILABLE = 'issue_https_not_available';
    /**
     * @param TranslatorInterface $translator
     * @param Configuration $configuration
     * @param HostingInformation $hostingInformation
     * @param PhpExtensionCheckerInterface $phpExtensionChecker
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Hosting\HostingInformation $hostingInformation, \PrestaShop\PrestaShop\Core\Configuration\PhpExtensionCheckerInterface $phpExtensionChecker)
    {
    }
    /**
     * Analyses the server configuration (apache configuration and php settings)
     * to check whether PrestaShop Webservice can be used or not.
     *
     * @return array empty if no errors
     */
    public function checkForErrors()
    {
    }
}
