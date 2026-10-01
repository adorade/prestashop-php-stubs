<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\Query;

class GetTagForEditing
{
    public function __construct(int $tagId)
    {
    }
    public function getTagId(): \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId
    {
    }
}
