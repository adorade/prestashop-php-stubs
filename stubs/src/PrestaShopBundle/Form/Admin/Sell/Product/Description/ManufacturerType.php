<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Description;

class ManufacturerType extends \Symfony\Component\Form\Extension\Core\Type\ChoiceType
{
    /**
     * @param TranslatorInterface $translator
     * @param FormChoiceProviderInterface $manufacturerChoiceProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $manufacturerChoiceProvider)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * @param string $key
     * @param string $domain
     * @param array $parameters
     *
     * @return string
     */
    protected function trans(string $key, string $domain, array $parameters = []): string
    {
    }
}
