<?php

namespace PrestaShop\PrestaShop\Core\Email;

/**
 * Interface EmailConfigurationTesterInterface defines contract for email configuration tester.
 */
interface EmailConfigurationTesterInterface
{
    /**
     * Test email configuration.
     *
     * @param array $config
     *
     * @return array<int, string>
     */
    public function testConfiguration(array $config);
}
