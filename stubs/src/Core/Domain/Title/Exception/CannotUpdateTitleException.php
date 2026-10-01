<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Exception;

/**
 * Thrown on failure to update title
 */
class CannotUpdateTitleException extends \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleException
{
    /**
     * When title update fails
     */
    public const FAILED_UPDATE_TITLE = 10;
}
