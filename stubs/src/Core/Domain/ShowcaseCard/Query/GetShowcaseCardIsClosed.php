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
     * @throws \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Exception\InvalidShowcaseCardNameException
     * @throws \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Exception\ShowcaseCardException
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
     * @return \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\ValueObject\ShowcaseCard
     */
    public function getShowcaseCard()
    {
    }
}
