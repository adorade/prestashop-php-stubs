<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import;

/**
 * Class ImportFormDataProvider is responsible for providing Import's 1st step form data.
 */
final class ImportFormDataProvider implements \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormDataProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Import\File\FileFinder $importFileFinder
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     */
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Import\File\FileFinder $importFileFinder, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
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
