<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\QueryHandler;

/**
 * Contract for handling GetShowcaseCardIsClosed
 */
interface GetShowcaseCardIsClosedHandlerInterface
{
    /**
     * Returns the "closed state" of a showcase command
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Query\GetShowcaseCardIsClosed $query
     *
     * @return bool True if the showcase card is closed, False otherwise
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Query\GetShowcaseCardIsClosed $query);
}
