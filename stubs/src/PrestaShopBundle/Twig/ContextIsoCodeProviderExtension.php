<?php

namespace PrestaShopBundle\Twig;

/**
 * Provides context language iso code
 */
class ContextIsoCodeProviderExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @param string $isoCode
     */
    public function __construct($isoCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
    }
    /**
     * @return string
     */
    public function getIsoCode()
    {
    }
}
