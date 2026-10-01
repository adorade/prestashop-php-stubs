<?php

namespace PrestaShopBundle\Entity;

/**
 * Translation.
 *
 * @ORM\Table(
 *     indexes={@ORM\Index(name="key", columns={"domain"})},
 * )
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\TranslationRepository")
 * @PassVsprintf
 */
class Translation
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
     * @return string
     */
    public function getKey()
    {
    }
    /**
     * @return string
     */
    public function getTranslation()
    {
    }
    /**
     * @return Lang
     */
    public function getLang()
    {
    }
    /**
     * @return string
     */
    public function getDomain()
    {
    }
    /**
     * @param string $key
     *
     * @return \PrestaShopBundle\Entity\Translation
     */
    public function setKey($key)
    {
    }
    /**
     * @param string $translation
     *
     * @return \PrestaShopBundle\Entity\Translation
     */
    public function setTranslation($translation)
    {
    }
    /**
     * @param Lang $lang
     *
     * @return \PrestaShopBundle\Entity\Translation
     */
    public function setLang(\PrestaShopBundle\Entity\Lang $lang)
    {
    }
    /**
     * @param string $domain
     *
     * @return \PrestaShopBundle\Entity\Translation
     */
    public function setDomain($domain)
    {
    }
    /**
     * @return string
     */
    public function getTheme()
    {
    }
    /**
     * @param string $theme
     *
     * @return \PrestaShopBundle\Entity\Translation
     */
    public function setTheme($theme)
    {
    }
}
