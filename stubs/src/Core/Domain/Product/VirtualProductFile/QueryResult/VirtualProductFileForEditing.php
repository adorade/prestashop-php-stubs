<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\QueryResult;

/**
 * Holds data for editing Virtual Product File
 */
class VirtualProductFileForEditing
{
    /**
     * @param int $id
     * @param string $fileName
     * @param string $displayName
     * @param int $accessDays
     * @param int $downloadTimesLimit
     * @param DateTimeInterface|null $expirationDate
     */
    public function __construct(int $id, string $fileName, string $displayName, int $accessDays, int $downloadTimesLimit, ?\DateTimeInterface $expirationDate)
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return string
     */
    public function getFileName(): string
    {
    }
    /**
     * @return string
     */
    public function getDisplayName(): string
    {
    }
    /**
     * @return int
     */
    public function getAccessDays(): int
    {
    }
    /**
     * @return int
     */
    public function getDownloadTimesLimit(): int
    {
    }
    /**
     * @return DateTimeInterface|null
     */
    public function getExpirationDate(): ?\DateTimeInterface
    {
    }
}
