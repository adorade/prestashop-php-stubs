<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\Exception;

class TagConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Tag\Exception\TagException
{
    /**
     * When id is not valid
     */
    public const INVALID_ID = 10;
}
