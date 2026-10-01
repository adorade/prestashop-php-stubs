<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\Exception;

/**
 * Thrown when trying to hook a module that is already registered on the given hook.
 */
class ModuleAlreadyHookedException extends \PrestaShop\PrestaShop\Core\Domain\Hook\Exception\HookException
{
}
