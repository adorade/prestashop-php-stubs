<?php

namespace PrestaShopBundle\Form\Admin\AdvancedParameters\AdminAPI;

class ResourceScopesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType implements \Symfony\Component\Form\DataMapperInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface $resourceScopeExtractor, private readonly \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function mapDataToForms($viewData, \Traversable $forms)
    {
    }
    public function mapFormsToData(\Traversable $forms, &$viewData)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function getParent()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
}
