<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountFeaturesType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\FeaturesChoiceProvider $featuresChoiceProvider)
    {
    }
    public function getParent(): string
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    protected function trans(string $key, string $domain, array $parameters = []): string
    {
    }
}
