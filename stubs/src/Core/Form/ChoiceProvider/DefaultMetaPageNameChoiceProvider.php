<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class DefaultMetaPageNameChoiceProvider is responsible for providing default page choices in
 * Shop parameters -> Traffic & Seo -> Seo & Urls -> form.
 */
final class DefaultMetaPageNameChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * DefaultPageChoiceProvider constructor.
     *
     * @param RequestStack $requestStack
     * @param MetaDataProviderInterface $dataProvider
     *
     * @todo: get rid of request stack by creating new interface.
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
