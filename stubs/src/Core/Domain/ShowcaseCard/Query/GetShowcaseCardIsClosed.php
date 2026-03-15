<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Query;

/**
 * This query retrieves the "closed status" of a showcase card
 */
class GetShowcaseCardIsClosed
{
    /**
     * GetShowcaseCardIsClosed constructor.
     *
     * @param int $employeeId
     * @param string $showcaseCardName
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
