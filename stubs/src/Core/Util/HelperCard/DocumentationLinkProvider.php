<?php

namespace PrestaShop\PrestaShop\Core\Util\HelperCard;

/**
 * Class HelperCardDocumentationLinkProvider provides documentation links for helper cards.
 */
final class DocumentationLinkProvider implements \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProviderInterface
{
    /**
     * @param string $contextLangIsoCode
     * @param array $documentationLinks
     */
    public function __construct($contextLangIsoCode, array $documentationLinks)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLink($cardType)
    {
    }
}
