<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder;

/**
 * Defines interface for creating form builders.
 *
 * @todo in next major: Add ?FormOptionProviderInterface $optionProvider = null as a third parameter to this interface
 */
interface FormBuilderFactoryInterface
{
    /**
     * @param string $formType
     * @param FormDataProviderInterface $dataProvider
     *
     * @return FormBuilderInterface
     */
    public function create($formType, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface $dataProvider);
}
