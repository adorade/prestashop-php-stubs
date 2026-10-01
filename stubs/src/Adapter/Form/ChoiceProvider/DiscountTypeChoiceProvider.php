<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class DiscountTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $repository, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext)
    {
    }
    public function getChoices()
    {
    }
}
