<?php

namespace PrestaShopBundle\Entity;

/**
 * Attribute.
 *
 * @ORM\Table(
 *     indexes={@ORM\Index(name="attribute_group", columns={"id_attribute_group"})}
 * )
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeRepository")
 */
class Attribute
{
    /**
     * Constructor.
     */
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
     * Set color.
     *
     * @param string $color
     *
     * @return Attribute
     */
    public function setColor($color)
    {
    }
    /**
     * Get color.
     *
     * @return string
     */
    public function getColor()
    {
    }
    /**
     * Set position.
     *
     * @param int $position
     *
     * @return Attribute
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
     * Set attributeGroup.
     *
     * @param AttributeGroup $attributeGroup
     *
     * @return Attribute
     */
    public function setAttributeGroup(\PrestaShopBundle\Entity\AttributeGroup $attributeGroup)
    {
    }
    /**
     * Get attributeGroup.
     *
     * @return AttributeGroup
     */
    public function getAttributeGroup()
    {
    }
    /**
     * Add shop.
     *
     * @param Shop $shop
     *
     * @return Attribute
     */
    public function addShop(\PrestaShopBundle\Entity\Shop $shop)
    {
    }
    /**
     * Remove shop.
     *
     * @param Shop $shop
     */
    public function removeShop(\PrestaShopBundle\Entity\Shop $shop)
    {
    }
    /**
     * Get shops.
     *
     * @return Collection<Shop>
     */
    public function getShops()
    {
    }
    public function addAttributeLang(\PrestaShopBundle\Entity\AttributeLang $attributeLang)
    {
    }
    public function removeAttributeLang(\PrestaShopBundle\Entity\AttributeLang $attributeLang)
    {
    }
    /**
     * @return Collection<AttributeLang>
     */
    public function getAttributeLangs()
    {
    }
}
