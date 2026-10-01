<?php

namespace PrestaShopBundle\Service\TransitionalBehavior;

/**
 * Contract to know which page's version to display.
 *
 * This interface gives methods to use to take decision:
 * - if we should display the new refactored page, or the old legacy one.
 * - if we should display the switch on the admin layout to change this setting.
 */
interface AdminPagePreferenceInterface
{
    /**
     * Use it to know if we need to redirect to legacy Controllers or not.
     *
     * @param string $page the page to look for
     *
     * @return bool true to redirect to legacy
     */
    public function getTemporaryShouldUseLegacyPage($page);
    /**
     * Set the temporary behavior of the new/old page on Admin interface.
     *
     * @param string $page the page to look for
     * @param bool $useLegacy true to redirect to old legacy pages for Product controller
     */
    public function setTemporaryShouldUseLegacyPage($page, $useLegacy);
    /**
     * Use it to know if we need to display the 'switch to legacy page' button or not.
     * In debug mode, always shown.
     *
     * @param string $page the page to look for
     *
     * @return bool true to show the switch to legacy page button
     */
    public function getTemporaryShouldAllowUseLegacyPage($page = null);
}
