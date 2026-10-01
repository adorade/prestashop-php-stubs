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
