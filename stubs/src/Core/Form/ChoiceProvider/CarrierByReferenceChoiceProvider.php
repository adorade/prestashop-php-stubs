<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class CarrierByReferenceChoiceProvider is responsible for providing carrier choices with value reference.
 */
final class CarrierByReferenceChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param CarrierDataProvider $carrierDataProvider
     * @param int $langId
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Carrier\CarrierDataProvider $carrierDataProvider, $langId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
