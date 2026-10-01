<?php

namespace PrestaShopBundle\Security\Admin\Exception;

/**
 * This exception is sent by the EmployeePasswordResetter when a reset mail action is performed
 * too soon.
 */
class PasswordResetTemporarilyBlockedException extends \RuntimeException
{
}
