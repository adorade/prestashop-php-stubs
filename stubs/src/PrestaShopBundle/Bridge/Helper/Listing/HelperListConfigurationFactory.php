<?php

namespace PrestaShopBundle\Bridge\Helper\Listing;

/**
 * Create an instance of the helper configuration object, using controller configuration.
 */
class HelperListConfigurationFactory
{
    /**
     * @param RouterInterface $router
     */
    public function __construct(\Symfony\Component\Routing\RouterInterface $router)
    {
    }
    /**
     * @param ControllerConfiguration $controllerConfiguration
     * @param string $identifierKey @see HelperListConfiguration::$identifierKey
     * @param string $indexRoute used to generate indexUrl. @see HelperListConfiguration::$indexUrl
     * @param string|null $positionIdentifierKey @see HelperListConfiguration::$positionIdentifierKey
     * @param string|null $defaultOrderBy @see HelperListConfiguration::$defaultOrderBy
     * @param bool $isJoinLanguageTableAuto @see HelperListConfiguration::$autoJoinLanguageTable
     * @param bool $deleted @see HelperListConfiguration::$deleted
     * @param bool $explicitSelect @see HelperListConfiguration::$explicitSelect
     * @param bool $useFoundRows @see HelperListConfiguration::$useFoundRows
     * @param string|null $listId @see HelperListConfiguration::$listId
     *
     * @return HelperListConfiguration
     */
    public function create(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration, string $identifierKey, string $indexRoute, ?string $positionIdentifierKey = null, ?string $defaultOrderBy = null, bool $isJoinLanguageTableAuto = false, bool $deleted = false, bool $explicitSelect = false, bool $useFoundRows = true, ?string $listId = null): \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration
    {
    }
}
