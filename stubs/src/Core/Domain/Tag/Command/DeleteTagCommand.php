<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\Command;

/**
 * Delete tag
 */
class DeleteTagCommand
{
    /**
     * @param int $tagId
     */
    public function __construct(int $tagId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId
     */
    public function getTagId(): \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId
    {
    }
}
