<?php

namespace PrestaShop\PrestaShop\Core\Domain\ValueObject;

/**
 * Class Email is responsible for providing valid email value.
 */
class Email
{
    /**
     * @var int Maximum allowed length for email
     */
    public const MAX_LENGTH = 255;
    /**
     * @param string $email
     *
     * @throws DomainConstraintException
     */
    public function __construct($email)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
    /**
     * Check if given email is the same as current
     *
     * @param Email $email
     *
     * @return bool
     */
    public function isEqualTo(\PrestaShop\PrestaShop\Core\Domain\ValueObject\Email $email)
    {
    }
    /**
     * Check that email is not an empty string
     *
     * @param string $email
     *
     * @throws DomainConstraintException
     */
    public function assertEmailIsNotEmpty($email)
    {
    }
}
