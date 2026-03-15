<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command;

class UpdateVirtualProductFileCommand
{
    /**
     * @param int $virtualProductFileId
     */
    public function __construct(int $virtualProductFileId)
    {
    }
    /**
     * @return VirtualProductFileId
     */
    public function getVirtualProductFileId(): \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId
    {
    }
    /**
     * @return string|null
     */
    public function getFilePath(): ?string
    {
    }
    /**
     * @param string|null $filePath
     */
    public function setFilePath(?string $filePath): void
    {
    }
    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
    }
    /**
     * @param string|null $displayName
     */
    public function setDisplayName(?string $displayName): void
    {
    }
    /**
     * @return DateTimeInterface|null
     */
    public function getExpirationDate(): ?\DateTimeInterface
    {
    }
    /**
     * @param DateTimeInterface|null $expirationDate
     */
    public function setExpirationDate(?\DateTimeInterface $expirationDate): void
    {
    }
    /**
     * @return int|null
     */
    public function getAccessDays(): ?int
    {
    }
    /**
     * @param int|null $accessDays
     */
    public function setAccessDays(?int $accessDays): void
    {
    }
    /**
     * @return int|null
     */
    public function getDownloadTimesLimit(): ?int
    {
    }
    /**
     * @param int|null $downloadTimesLimit
     */
    public function setDownloadTimesLimit(?int $downloadTimesLimit): void
    {
    }
}
