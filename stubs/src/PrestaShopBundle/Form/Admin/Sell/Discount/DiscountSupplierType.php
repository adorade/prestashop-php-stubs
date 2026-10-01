<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountSupplierType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $supplierNameByIdChoiceProvider
     */
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $supplierNameByIdChoiceProvider)
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
