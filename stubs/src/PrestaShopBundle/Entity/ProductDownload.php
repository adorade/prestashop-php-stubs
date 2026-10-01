<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Entity
 *
 * @ORM\Table(
 *     indexes={@ORM\Index(name="product_active", columns={"id_product", "active"})},
 *     uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product"})}
 * )
 */
class ProductDownload
{
    /**
     * Download ID, different from product ID.
     */
    public function getId(): int
    {
    }
    /**
     * Related product ID.
     */
    public function getIdProduct(): int
    {
    }
    /**
     * Virtual filename, used for display on download.
     */
    public function getDisplayFilename(): ?string
    {
    }
    /**
     * Get actual filename on the shop filesystem.
     */
    public function getFilename(): ?string
    {
    }
    /**
     * Date when the download was added.
     */
    public function getDateAdd(): \DateTime
    {
    }
    /**
     * Date until the product can be downloaded.
     */
    public function getDateExpiration(): ?\DateTime
    {
    }
    /**
     * Number of days (after order) the product can be downloaded.
     */
    public function getNbDaysAccessible(): ?int
    {
    }
    /**
     * The number of downloads of a product can be limited.
     */
    public function getNbDownloadable(): int
    {
    }
    public function getActive(): bool
    {
    }
    public function getIsShareable(): bool
    {
    }
    public function setIdProduct(int $idProduct): static
    {
    }
    public function setDisplayFilename(?string $displayFilename): static
    {
    }
    public function setFilename(?string $filename): static
    {
    }
    public function setDateAdd(\DateTime $dateAdd): static
    {
    }
    public function setDateExpiration(?\DateTime $dateExpiration): static
    {
    }
    public function setNbDaysAccessible(?int $nbDaysAccessible): static
    {
    }
    public function setNbDownloadable(?int $nbDownloadable): static
    {
    }
    public function setActive(bool $active): static
    {
    }
    public function setIsShareable(bool $isShareable): static
    {
    }
    /**
     * Now we tell doctrine that before we persist or update we call the updateTimestamps() function.
     *
     * @ORM\PrePersist
     *
     * @ORM\PreUpdate
     */
    public function updateTimestamps(): void
    {
    }
}
