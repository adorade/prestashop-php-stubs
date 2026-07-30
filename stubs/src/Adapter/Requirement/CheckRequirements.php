<?php

namespace PrestaShop\PrestaShop\Adapter\Requirement;

/**
 * Check system requirements of a PrestaShop website.
 */
class CheckRequirements
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Returns a summary of all system requirements.
     *
     * @return array
     */
    public function getSummary()
    {
    }
}
