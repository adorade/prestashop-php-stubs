<?php

namespace PrestaShopBundle\Entity;

/**
 * ShopGroup.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ShopGroupRepository")
 */
class ShopGroup
{
    public function __construct()
    {
    }
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Set name.
     *
     * @param string $name
     *
     * @return ShopGroup
     */
    public function setName($name)
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Set color
     *
     * @param string $color
     *
     * @return ShopGroup
     */
    public function setColor(string $color): \PrestaShopBundle\Entity\ShopGroup
    {
    }
    /**
     * Get color
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
    }
    /**
     * Set shareCustomer.
     *
     * @param bool $shareCustomer
     *
     * @return ShopGroup
     */
    public function setShareCustomer($shareCustomer)
    {
    }
    /**
     * Get shareCustomer.
     *
     * @return bool
     */
    public function getShareCustomer()
    {
    }
    /**
     * Set shareOrder.
     *
     * @param bool $shareOrder
     *
     * @return ShopGroup
     */
    public function setShareOrder($shareOrder)
    {
    }
    /**
     * Get shareOrder.
     *
     * @return bool
     */
    public function getShareOrder()
    {
    }
    /**
     * Set shareStock.
     *
     * @param bool $shareStock
     *
     * @return ShopGroup
     */
    public function setShareStock($shareStock)
    {
    }
    /**
     * Get shareStock.
     *
     * @return bool
     */
    public function getShareStock()
    {
    }
    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return ShopGroup
     */
    public function setActive($active)
    {
    }
    /**
     * Get active.
     *
     * @return bool
     */
    public function getActive()
    {
    }
    /**
     * Set deleted.
     *
     * @param bool $deleted
     *
     * @return ShopGroup
     */
    public function setDeleted($deleted)
    {
    }
    /**
     * Get deleted.
     *
     * @return bool
     */
    public function getDeleted()
    {
    }
    /**
     * @return Collection
     */
    public function getShops(): \Doctrine\Common\Collections\Collection
    {
    }
}
