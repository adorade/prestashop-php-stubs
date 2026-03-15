<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Command;

/**
 * Deletes state
 */
class DeleteTitleCommand
{
    /**
     * @param int $titleId
     */
    public function __construct(int $titleId)
    {
    }
    /**
     * @return TitleId
     */
    public function getTitleId(): \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
    {
    }
}
