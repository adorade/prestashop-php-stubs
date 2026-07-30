<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class TimezoneByNameChoiceProvider provides timezone choices with name values.
 */
final class TimezoneByNameChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param TimezoneRepository $timezoneRepository
     */
    public function __construct(\PrestaShopBundle\Entity\Repository\TimezoneRepository $timezoneRepository)
    {
    }
    /**
     * Get timezone choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
}
