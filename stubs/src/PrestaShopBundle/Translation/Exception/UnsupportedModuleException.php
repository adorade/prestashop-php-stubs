<?php

namespace PrestaShopBundle\Translation\Exception;

/**
 * Will be thrown if a module name is required by a provider and not set.
 */
final class UnsupportedModuleException extends \Symfony\Component\Translation\Exception\NotFoundResourceException
{
    /**
     * @param string $providerIdentifier the provider identifier
     *
     * @return self
     */
    public static function moduleNotProvided($providerIdentifier)
    {
    }
}
