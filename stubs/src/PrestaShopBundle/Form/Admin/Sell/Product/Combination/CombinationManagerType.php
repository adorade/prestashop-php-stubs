<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

/**
 * This form type is not really used for product form data. It is actually rendered specifically via its form theme
 * (src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig) to include the
 * layout to render all the combination management controls. Among which the combination paginated list which is itself
 * rendered via a controller action from the CombinationController.
 *
 * Some form inputs will be rendered in this sub form but they actually belong to another form (CombinationListType) so
 * they have different property path from the product form and won't be handled by it (since Form::getData is based on
 * the form naming structure it will naturally ignore all those fields).
 */
class CombinationManagerType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multiStoreFeature)
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
