<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * Adds "documentation_link" function to Twig so documentation links can be generated in templates
 */
class DocumentationLinkExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProviderInterface $documentationLinkProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProviderInterface $documentationLinkProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
    }
}
