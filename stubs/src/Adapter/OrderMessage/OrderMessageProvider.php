<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage;

/**
 * Gets order messages.
 */
class OrderMessageProvider
{
    /**
     * @param int $contextLanguageId
     */
    public function __construct(int $contextLanguageId)
    {
    }
    /**
     * @param int|null $langId
     *
     * @return array
     */
    public function getMessages(int $langId = null): array
    {
    }
}
