<?php

namespace PrestaShop\PrestaShop\Core\Module\Exception;

/**
 * Default module error implementation
 * The message of this exception will be displayed to the end-user
 *
 * You can use it in a module hooked on a Symfony page
 */
class ModuleErrorException extends \PrestaShop\PrestaShop\Core\Exception\CoreException implements \PrestaShop\PrestaShop\Core\Module\Exception\ModuleErrorInterface
{
}
