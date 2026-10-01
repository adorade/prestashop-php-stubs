<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Query;

/**
 * Gets state for editing in back office
 */
class GetTitleForEditing
{
    /**
     * @param int $titleId
     */
    public function __construct(int $titleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
     */
    public function getTitleId(): \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
    {
    }
}
