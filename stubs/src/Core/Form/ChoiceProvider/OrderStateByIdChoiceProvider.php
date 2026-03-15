<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class OrderStateByIdChoiceProvider provides order state choices with ID values.
 */
final class OrderStateByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param int $languageId language ID
     * @param OrderStateDataProviderInterface $orderStateDataProvider
     * @param ColorBrightnessCalculator $colorBrightnessCalculator
     * @param TranslatorInterface $translator
     */
    public function __construct($languageId, \PrestaShop\PrestaShop\Core\Order\OrderStateDataProviderInterface $orderStateDataProvider, \PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator $colorBrightnessCalculator, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Get order state choices.
     *
     * @param array $options
     *
     * @return array
     */
    public function getChoices(array $options = [])
    {
    }
    /**
     * Get order state choices attributes.
     *
     * @return array
     */
    public function getChoicesAttributes()
    {
    }
}
