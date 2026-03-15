<?php

namespace PrestaShop\PrestaShop\Core\Proxy;

/**
 * Class CachedFileFinderProxy is a local cache proxy of file finder.
 */
final class CachedFileFinderProxy implements \PrestaShop\PrestaShop\Core\File\FileFinderInterface
{
    /**
     * @param FileFinderInterface $delegate instance of file finder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\File\FileFinderInterface $delegate)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function find()
    {
    }
}
