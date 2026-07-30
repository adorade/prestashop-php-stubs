<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderSourceForViewing
{
    /**
     * @param string $httpReferer
     * @param string $requestUri
     * @param DateTimeImmutable $addedAt
     * @param string $keywords
     */
    public function __construct(string $httpReferer, string $requestUri, \DateTimeImmutable $addedAt, string $keywords)
    {
    }
    /**
     * @return string
     */
    public function getHttpReferer(): string
    {
    }
    /**
     * @return string
     */
    public function getRequestUri(): string
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getAddedAt(): \DateTimeImmutable
    {
    }
    /**
     * @return string
     */
    public function getKeywords(): string
    {
    }
}
