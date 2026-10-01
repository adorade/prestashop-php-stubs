<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * Standalone shop-association form shown on the definition view page — the ONE field of a
 * module-owned definition that remains editable from the BO (see the shop-association
 * carve-out in UpdateExtraPropertyDefinitionHandler).
 *
 * Owns the dynamic help text spelling out the fallback the merchant cannot guess: pass the
 * owning module's technical name via the module_name option and the help lists the module's
 * currently enabled stores; without it, the generic "all stores" wording applies.
 */
class ExtraPropertyDefinitionShopsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository $moduleRepository, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
