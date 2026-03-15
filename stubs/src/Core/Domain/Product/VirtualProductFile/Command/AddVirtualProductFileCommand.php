<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command;

/**
 * Adds downloadable file for virtual product
 */
class AddVirtualProductFileCommand
{
    /**
     * @param int $productId
     * @param string $filePath
     * @param string $displayName display name of the file
     * @param int|null $accessDays
     * @param int|null $downloadTimesLimit
     * @param DateTimeInterface|null $expirationDate
     */
    public function __construct(int $productId, string $filePath, string $displayName, ?int $accessDays = null, ?int $downloadTimesLimit = null, ?\DateTimeInterface $expirationDate = null)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return string
     */
    public function getFilePath(): string
    {
    }
    /**
     * @return string
     */
    public function getDisplayName(): string
    {
    }
    /**
     * @return DateTimeInterface|null
     */
    public function getExpirationDate(): ?\DateTimeInterface
    {
    }
    /**
     * @return int|null
     */
    public function getAccessDays(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getDownloadTimesLimit(): ?int
    {
    }
}
