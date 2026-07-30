<?php

namespace PrestaShopBundle\Translation\Loader;

/**
 * The user translated catalogue is stored in database.
 * This class is a helper to build the query for retrieving the translations.
 * They depend on parameters like locale, theme or domain.
 */
class DatabaseTranslationLoader implements \Symfony\Component\Translation\Loader\LoaderInterface
{
    /** @var EntityManagerInterface */
    protected $entityManager;
    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager)
    {
    }
    /**
     * @param mixed $resource
     * @param string $locale
     * @param string $domain
     * @param string|null $theme
     *
     * @return MessageCatalogue
     *
     * @todo: this method doesn't match the interface
     */
    public function load($resource, $locale, $domain = 'messages', $theme = null)
    {
    }
}
