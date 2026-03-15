<?php

namespace PrestaShopBundle\Entity;

/**
 * AttributeGroupLang.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeGroupLangRepository")
 */
class AttributeGroupLang
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
     * @return AttributeGroupLang
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
     * Set publicName.
     *
     * @param string $publicName
     *
     * @return AttributeGroupLang
     */
    public function setPublicName($publicName)
    {
    }
    /**
     * Get publicName.
     *
     * @return string
     */
    public function getPublicName()
    {
    }
    /**
     * Set attributeGroup.
     *
     * @param \PrestaShopBundle\Entity\AttributeGroup $attributeGroup
     *
     * @return AttributeGroupLang
     */
    public function setAttributeGroup(\PrestaShopBundle\Entity\AttributeGroup $attributeGroup)
    {
    }
    /**
     * Get attributeGroup.
     *
     * @return \PrestaShopBundle\Entity\AttributeGroup
     */
    public function getAttributeGroup()
    {
    }
    /**
     * Set lang.
     *
     * @param \PrestaShopBundle\Entity\Lang $lang
     *
     * @return AttributeGroupLang
     */
    public function setLang(\PrestaShopBundle\Entity\Lang $lang)
    {
    }
    /**
     * Get lang.
     *
     * @return \PrestaShopBundle\Entity\Lang
     */
    public function getLang()
    {
    }
}
