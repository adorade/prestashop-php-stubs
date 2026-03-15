<?php

namespace PrestaShopBundle\Bridge\AdminController;

/**
 * Contains the principal methods you need to horizontally migrate a controller which has a list.
 */
trait FrameworkBridgeControllerListTrait
{
    /**
     * @param string $identifierKey @see HelperListConfiguration::$identifierKey
     * @param string $defaultOrderBy @see HelperListConfiguration::$defaultOrderBy
     * @param string $indexRoute route name used to generate url for filters & sorting submissions. @see HelperListConfiguration::$indexUrl
     * @param string|null $positionIdentifierKey @see HelperListConfiguration::$positionIdentifierKey
     * @param bool $autoJoinLangTable @see HelperListConfiguration::$autoJoinLanguageTable
     * @param bool $deleted @see HelperListConfiguration::$deleted
     * @param bool $explicitSelect @see HelperListConfiguration::$explicitSelect
     * @param bool $useFoundRows @see HelperListConfiguration::$useFoundRows
     * @param string|null $listId @see HelperListConfiguration::$listId
     *
     * @return HelperListConfiguration
     */
    protected function buildListConfiguration(string $identifierKey, string $defaultOrderBy, string $indexRoute, ?string $positionIdentifierKey = null, bool $autoJoinLangTable = true, bool $deleted = false, bool $explicitSelect = false, bool $useFoundRows = true, ?string $listId = null): \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration
    {
    }
    /**
     * Handles filters submit and reset
     *
     * @param Request $request
     * @param HelperListConfiguration $helperListConfiguration
     */
    protected function processFilters(\Symfony\Component\HttpFoundation\Request $request, \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration $helperListConfiguration): void
    {
    }
}
