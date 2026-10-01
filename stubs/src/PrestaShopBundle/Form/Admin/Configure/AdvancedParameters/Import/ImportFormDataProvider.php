<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import;

/**
 * Class ImportFormDataProvider is responsible for providing Import's 1st step form data.
 */
final class ImportFormDataProvider implements \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormDataProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Import\File\FileFinder $importFileFinder
     * @param \Symfony\Component\HttpFoundation\Session\SessionInterface $session
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\File\FileFinder $importFileFinder, \Symfony\Component\HttpFoundation\Session\SessionInterface $session)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
