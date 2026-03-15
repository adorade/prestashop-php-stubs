<?php

namespace PrestaShop\PrestaShop\Adapter\Tab;

/**
 * Class TabDataProvider provides Tabs data using legacy logic.
 */
class TabDataProvider
{
    /**
     * @param LegacyContext $legacyContext
     * @param ConfigurationInterface $legacyConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\ConfigurationInterface $legacyConfiguration)
    {
    }
    /**
     * Gets viewable tabs for current context employee.
     *
     * @param int $languageId
     *
     * @return array
     */
    public function getViewableTabsForContextEmployee($languageId)
    {
    }
    /**
     * Gets tabs that given employee profile can view.
     *
     * @param int $profileId
     * @param int $languageId
     *
     * @return array
     */
    public function getViewableTabs($profileId, $languageId)
    {
    }
    /**
     * Reset static tab cache
     *
     * @return void
     */
    public function resetTabCache(): void
    {
    }
}
