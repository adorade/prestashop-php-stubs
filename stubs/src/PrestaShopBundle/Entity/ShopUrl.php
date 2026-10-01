<?php

namespace PrestaShopBundle\Entity;

/**
 * ShopUrl
 *
 * @ORM\Table(
 *     indexes={@ORM\Index(name="id_shop", columns={"id_shop", "main"})},
 *     uniqueConstraints={
 *
 *         @ORM\UniqueConstraint(name="full_shop_url", columns={"domain", "physical_uri", "virtual_uri"}),
 *         @ORM\UniqueConstraint(name="full_shop_url_ssl", columns={"domain_ssl", "physical_uri", "virtual_uri"}),
 *     }
 * )
 *
 * @ORM\Entity
 */
class ShopUrl
{
    public function getId(): int
    {
    }
    public function setDomain(string $domain): static
    {
    }
    public function getDomain(): string
    {
    }
    public function setDomainSsl(string $domainSsl): static
    {
    }
    public function getDomainSsl(): string
    {
    }
    public function setPhysicalUri(string $physicalUri): static
    {
    }
    public function getPhysicalUri(): string
    {
    }
    public function setVirtualUri(string $virtualUri): static
    {
    }
    public function getVirtualUri(): string
    {
    }
    public function setMain(bool $main): static
    {
    }
    public function getMain(): bool
    {
    }
    public function setActive(bool $active): static
    {
    }
    public function getActive(): bool
    {
    }
    public function getShop(): \PrestaShopBundle\Entity\Shop
    {
    }
    public function setShop(\PrestaShopBundle\Entity\Shop $shop): static
    {
    }
}
