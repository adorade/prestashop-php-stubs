<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

/**
 * Generates the help url which is used most in the help sidebar component.
 */
class HelpProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Routing\RouterInterface $router, \PrestaShop\PrestaShop\Core\Help\Documentation $documentation)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getUrl(string $section = '', string $title = '')
    {
    }
}
