<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Command;

/**
 * This command permanently closes a showcase card
 */
class CloseShowcaseCardCommand
{
    /**
     * CloseShowcaseCardCommand constructor.
     *
     * @param int $employeeId
     * @param string $showcaseCardName Name of the showcase card
     *
     * @throws InvalidShowcaseCardNameException
     * @throws ShowcaseCardException
     */
    public function __construct($employeeId, $showcaseCardName)
    {
    }
    /**
     * @return int
     */
    public function getEmployeeId()
    {
    }
    /**
     * @return ShowcaseCard
     */
    public function getShowcaseCard()
    {
    }
}
