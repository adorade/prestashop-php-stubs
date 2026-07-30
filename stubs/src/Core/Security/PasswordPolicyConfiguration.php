<?php

namespace PrestaShop\PrestaShop\Core\Security;

/**
 * Responsible for saving configuration options for security
 */
class PasswordPolicyConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public const PASSWORD_EXTREMELY_GUESSABLE = 0;
    public const PASSWORD_VERY_GUESSABLE = 1;
    public const PASSWORD_SOMEWHAT_GUESSABLE = 2;
    public const PASSWORD_SAFELY_UNGUESSABLE = 3;
    public const PASSWORD_VERY_UNGUESSABLE = 4;
    public const DEFAULT_MINIMUM_LENGTH = 8;
    public const DEFAULT_MAXIMUM_LENGTH = 72;
    public const AVAILABLE_PASSWORD_TYPE = [self::PASSWORD_EXTREMELY_GUESSABLE, self::PASSWORD_VERY_GUESSABLE, self::PASSWORD_SOMEWHAT_GUESSABLE, self::PASSWORD_SAFELY_UNGUESSABLE, self::PASSWORD_VERY_UNGUESSABLE];
    public const CONFIGURATION_MAXIMUM_LENGTH = 'PS_SECURITY_PASSWORD_POLICY_MAXIMUM_LENGTH';
    public const CONFIGURATION_MINIMUM_LENGTH = 'PS_SECURITY_PASSWORD_POLICY_MINIMUM_LENGTH';
    public const CONFIGURATION_MINIMUM_SCORE = 'PS_SECURITY_PASSWORD_POLICY_MINIMUM_SCORE';
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $configuration)
    {
    }
}
