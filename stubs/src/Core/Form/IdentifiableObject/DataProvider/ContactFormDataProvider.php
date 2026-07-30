<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Class ContactFormDataProvider is responsible for providing form data for contacts by contact id or by giving default
 * values.
 */
final class ContactFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param DataTransformerInterface $stringArrayToIntegerArrayDataTransformer
     * @param int[] $contextShopIds
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, \Symfony\Component\Form\DataTransformerInterface $stringArrayToIntegerArrayDataTransformer, array $contextShopIds)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws ContactException
     */
    public function getData($contactId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
