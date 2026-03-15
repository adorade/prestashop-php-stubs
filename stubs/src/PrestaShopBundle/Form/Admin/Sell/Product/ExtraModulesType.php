<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

/**
 * This form type is used to display modules in an extra tab that regroup the modules implementing the displayAdminProductsExtra
 * hook. This is not the recommended way to integrate in the product page anymore but we keep it for backward compatibility.
 */
class ExtraModulesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const HOOK_NAME = 'displayAdminProductsExtra';
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * This method is here to simulate the previous call of renderhooksarray('displayAdminProductsExtra', { 'id_product': productId })
     * so it is basically a copy (slightly adapted) of the code from HookExtension::renderHooksArray method.
     */
    protected function renderHooksArray(int $productId): array
    {
    }
}
