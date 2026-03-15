<?php

namespace PrestaShop\PrestaShop\Adapter\Admin;

/**
 * Adapter to know which page's version to display.
 *
 * This implementation gives methods to use to take decision:
 * - if we should display the new refactored page, or the old legacy one.
 * - if we should display the switch on the admin layout to change this setting.
 *
 * Data is stored in the cookie, as legacy does.
 */
class PagePreference implements \PrestaShopBundle\Service\TransitionalBehavior\AdminPagePreferenceInterface
{
    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, bool $isDebug = _PS_MODE_DEV_)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTemporaryShouldUseLegacyPage($page)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setTemporaryShouldUseLegacyPage($page, $useLegacy)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTemporaryShouldAllowUseLegacyPage($page = null)
    {
    }
}
