<?php

namespace PrestaShop\PrestaShop\Core\Employee;

/**
 * Interface AvatarProviderInterface describes employee avatar provider.
 */
interface AvatarProviderInterface
{
    /**
     * Get default employee avatar URL.
     *
     * @return string
     */
    public function getDefaultAvatarUrl();
}
