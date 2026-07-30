<?php

namespace PrestaShopBundle\Entity;

/**
 * ShopUrl
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ShopUrl
{
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain(string $domain): self
    {
    }
    /**
     * @return string
     */
    public function getDomain(): string
    {
    }
    /**
     * @param string $domainSsl
     *
     * @return $this
     */
    public function setDomainSsl(string $domainSsl): self
    {
    }
    /**
     * @return string
     */
    public function getDomainSsl(): string
    {
    }
    /**
     * @param string $physicalUri
     *
     * @return $this
     */
    public function setPhysicalUri(string $physicalUri): self
    {
    }
    /**
     * @return string
     */
    public function getPhysicalUri(): string
    {
    }
    /**
     * @param string $virtualUri
     *
     * @return $this
     */
    public function setVirtualUri(string $virtualUri): self
    {
    }
    /**
     * @return string
     */
    public function getVirtualUri(): string
    {
    }
    /**
     * @param bool $main
     *
     * @return $this
     */
    public function setMain(bool $main): self
    {
    }
    /**
     * @return bool
     */
    public function getMain(): bool
    {
    }
    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive(bool $active): self
    {
    }
    /**
     * @return bool
     */
    public function getActive(): bool
    {
    }
    /**
     * Get shopGroup.
     *
     * @return Shop
     */
    public function getShop(): \PrestaShopBundle\Entity\Shop
    {
    }
}
