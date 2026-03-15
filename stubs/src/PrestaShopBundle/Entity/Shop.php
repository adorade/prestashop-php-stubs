<?php

namespace PrestaShopBundle\Entity;

/**
 * Shop.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ShopRepository")
 */
class Shop
{
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
     * @return Shop
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
     * @param string $color
     *
     * @return Shop
     */
    public function setColor(string $color): \PrestaShopBundle\Entity\Shop
    {
    }
    /**
     * @return string
     */
    public function getColor(): ?string
    {
    }
    /**
     * Set idCategory.
     *
     * @param int $idCategory
     *
     * @return Shop
     */
    public function setIdCategory($idCategory)
    {
    }
    /**
     * Get idCategory.
     *
     * @return int
     */
    public function getIdCategory()
    {
    }
    /**
     * Set themeName.
     *
     * @param string $themeName
     *
     * @return Shop
     */
    public function setThemeName($themeName)
    {
    }
    /**
     * Get themeName.
     *
     * @return string
     */
    public function getThemeName()
    {
    }
    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return Shop
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
     * @return Shop
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
     * Set shopGroup.
     *
     * @param \PrestaShopBundle\Entity\ShopGroup $shopGroup
     *
     * @return Shop
     */
    public function setShopGroup(\PrestaShopBundle\Entity\ShopGroup $shopGroup)
    {
    }
    /**
     * Get shopGroup.
     *
     * @return \PrestaShopBundle\Entity\ShopGroup
     */
    public function getShopGroup()
    {
    }
    /**
     * @return Collection
     */
    public function getShopUrls(): \Doctrine\Common\Collections\Collection
    {
    }
    /**
     * @return bool
     */
    public function hasMainUrl(): bool
    {
    }
}
