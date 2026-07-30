<?php

namespace PrestaShopBundle\Form;

class FormBuilderModifier
{
    /**
     * @param FormBuilderInterface $formBuilder
     * @param string $targetFieldName
     * @param string|FormBuilderInterface $newChild
     * @param string|null $type
     * @param array $options
     */
    public function addAfter(\Symfony\Component\Form\FormBuilderInterface $formBuilder, string $targetFieldName, $newChild, ?string $type = null, array $options = []): void
    {
    }
    /**
     * @param FormBuilderInterface $formBuilder
     * @param string $targetFieldName
     * @param string|FormBuilderInterface $newChild
     * @param string|null $type
     * @param array $options
     */
    public function addBefore(\Symfony\Component\Form\FormBuilderInterface $formBuilder, string $targetFieldName, $newChild, ?string $type = null, array $options = []): void
    {
    }
}
