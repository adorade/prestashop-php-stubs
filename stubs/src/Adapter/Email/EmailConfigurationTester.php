<?php

namespace PrestaShop\PrestaShop\Adapter\Email;

/**
 * Class EmailConfigurationTester is responsible for sending test email.
 *
 * @internal
 */
final class EmailConfigurationTester implements \PrestaShop\PrestaShop\Core\Email\EmailConfigurationTesterInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param array $config
     *
     * @return array<int, string>
     */
    public function testConfiguration(array $config)
    {
    }
}
