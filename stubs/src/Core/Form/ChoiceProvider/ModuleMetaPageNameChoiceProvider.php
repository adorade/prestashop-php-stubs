<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ModuleMetaPageNameChoiceProvider is responsible for providing module page choices in
 * Shop parameters -> Traffic & Seo -> Seo & Urls -> form.
 */
final class ModuleMetaPageNameChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * DefaultPageChoiceProvider constructor.
     *
     * @param RequestStack $requestStack
     * @param MetaDataProviderInterface $dataProvider
     */
    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack, \PrestaShop\PrestaShop\Core\Meta\MetaDataProviderInterface $dataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
