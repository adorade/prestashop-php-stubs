<?php

namespace PrestaShopBundle\Entity;

/**
 * Tab.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\TabRepository")
 */
class Tab
{
    public function getId()
    {
    }
    public function getIdParent()
    {
    }
    public function getPosition()
    {
    }
    public function getModule()
    {
    }
    public function getClassName()
    {
    }
    public function getActive()
    {
    }
    public function getIcon()
    {
    }
    public function getTabLangs()
    {
    }
    /**
     * @return string|null
     */
    public function getWording(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getWordingDomain(): ?string
    {
    }
    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return Tab
     */
    public function setActive($active)
    {
    }
    /**
     * @return string
     */
    public function getRouteName()
    {
    }
    /**
     * @param string $routeName
     *
     * @return Tab
     */
    public function setRouteName($routeName)
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @param bool $enabled
     *
     * @return Tab
     */
    public function setEnabled($enabled)
    {
    }
}
