<?php

namespace PrestaShop\PrestaShop\Core\Util\HelperCard;

/**
 * Interface DocumentationLinkProviderInterface
 */
interface DocumentationLinkProviderInterface
{
    /**
     * @param string $cardType
     *
     * @return string Link for documentation
     */
    public function getLink($cardType);
}
