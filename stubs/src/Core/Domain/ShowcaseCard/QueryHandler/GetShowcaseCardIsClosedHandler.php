<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\QueryHandler;

/**
 * Finds out if a showcase card has been closed
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetShowcaseCardIsClosedHandler implements \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\QueryHandler\GetShowcaseCardIsClosedHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\ConfigurationMap $configurationMap
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\ConfigurationMap $configurationMap)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Query\GetShowcaseCardIsClosed $query
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Exception\ShowcaseCardException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Query\GetShowcaseCardIsClosed $query)
    {
    }
}
