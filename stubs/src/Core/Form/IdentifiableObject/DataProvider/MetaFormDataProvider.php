<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Class MetaFormDataProvider is responsible for providing required data for meta form.
 */
final class MetaFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws MetaException
     */
    public function getData($metaId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
