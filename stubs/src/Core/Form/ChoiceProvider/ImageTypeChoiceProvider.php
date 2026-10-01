<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

class ImageTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository)
    {
    }
    public function getChoices(): array
    {
    }
    public function buildChoicesByTypes(): array
    {
    }
}
