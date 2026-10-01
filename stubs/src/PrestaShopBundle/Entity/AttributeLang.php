<?php

namespace PrestaShopBundle\Entity;

/**
 * AttributeLang.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeLangRepository")
 */
class AttributeLang
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
     * @return AttributeLang
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
     * Set attribute.
     *
     * @param \PrestaShopBundle\Entity\Attribute $attribute
     *
     * @return AttributeLang
     */
    public function setAttribute(\PrestaShopBundle\Entity\Attribute $attribute)
    {
    }
    /**
     * Get attribute.
     *
     * @return \PrestaShopBundle\Entity\Attribute
     */
    public function getAttribute()
    {
    }
    /**
     * Set lang.
     *
     * @param \PrestaShopBundle\Entity\Lang $lang
     *
     * @return AttributeLang
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
