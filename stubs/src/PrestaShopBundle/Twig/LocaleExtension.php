<?php

namespace PrestaShopBundle\Twig;

/**
 * Provides helper functions in Twig for formatting data using context locale
 */
class LocaleExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @param string $contextDateFormatLite
     */
    public function __construct(string $contextDateFormatLite)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
    }
}
