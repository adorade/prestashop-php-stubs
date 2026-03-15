<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\QueryHandler;

/**
 * Finds out if a showcase card has been closed
 */
final class GetShowcaseCardIsClosedHandler implements \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\QueryHandler\GetShowcaseCardIsClosedHandlerInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param ConfigurationMap $configurationMap
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\ConfigurationMap $configurationMap)
    {
    }
    /**
     * @param GetShowcaseCardIsClosed $query
     *
     * @return bool
     *
     * @throws ShowcaseCardException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Query\GetShowcaseCardIsClosed $query)
    {
    }
}
