<?php

namespace PrestaShopBundle\Entity;

/**
 * AttributeGroup.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeGroupRepository")
 */
class AttributeGroup
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
     * Set isColorGroup.
     *
     * @param bool $isColorGroup
     *
     * @return AttributeGroup
     */
    public function setIsColorGroup($isColorGroup)
    {
    }
    /**
     * Get isColorGroup.
     *
     * @return bool
     */
    public function getIsColorGroup()
    {
    }
    /**
     * Set groupType.
     *
     * @param string $groupType
     *
     * @return AttributeGroup
     */
    public function setGroupType($groupType)
    {
    }
    /**
     * Get groupType.
     *
     * @return string
     */
    public function getGroupType()
    {
    }
    /**
     * Set position.
     *
     * @param int $position
     *
     * @return AttributeGroup
     */
    public function setPosition($position)
    {
    }
    /**
     * Get position.
     *
     * @return int
     */
    public function getPosition()
    {
    }
    /**
     * @return Collection<Attribute>
     */
    public function getAttributes(): \Doctrine\Common\Collections\Collection
    {
    }
    /**
     * Add shop.
     *
     * @param \PrestaShopBundle\Entity\Shop $shop
     *
     * @return AttributeGroup
     */
    public function addShop(\PrestaShopBundle\Entity\Shop $shop)
    {
    }
    /**
     * Remove shop.
     *
     * @param \PrestaShopBundle\Entity\Shop $shop
     */
    public function removeShop(\PrestaShopBundle\Entity\Shop $shop)
    {
    }
    /**
     * Get shops.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShops()
    {
    }
    public function addAttributeGroupLang(\PrestaShopBundle\Entity\AttributeGroupLang $attributeGroupLang)
    {
    }
    public function removeAttributeGroupLang(\PrestaShopBundle\Entity\AttributeGroupLang $attributeGroupLang)
    {
    }
    /**
     * @return Collection<AttributeGroupLang>
     */
    public function getAttributeGroupLangs()
    {
    }
}
