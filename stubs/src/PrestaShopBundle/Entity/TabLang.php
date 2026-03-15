<?php

namespace PrestaShopBundle\Entity;

/**
 * TabLang.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\TabLangRepository")
 */
class TabLang
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
     * @return TabLang
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
     * Set lang.
     *
     * @param \PrestaShopBundle\Entity\Lang $lang
     *
     * @return TabLang
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
