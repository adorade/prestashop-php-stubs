<?php

namespace PrestaShop\PrestaShop\Adapter\Employee;

/**
 * Class AvatarProvider provides employee avatar data.
 */
final class AvatarProvider implements \PrestaShop\PrestaShop\Core\Employee\AvatarProviderInterface
{
    /**
     * @param Tools $tools
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Tools $tools)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultAvatarUrl()
    {
    }
}
