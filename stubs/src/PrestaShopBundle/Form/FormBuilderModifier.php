<?php

namespace PrestaShopBundle\Form;

class FormBuilderModifier
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $formBuilder
     * @param string $targetFieldName
     * @param string|\Symfony\Component\Form\FormBuilderInterface $newChild
     * @param string|null $type
     * @param array $options
     */
    public function addAfter(\Symfony\Component\Form\FormBuilderInterface $formBuilder, string $targetFieldName, $newChild, ?string $type = null, array $options = []): void
    {
    }
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $formBuilder
     * @param string $targetFieldName
     * @param string|\Symfony\Component\Form\FormBuilderInterface $newChild
     * @param string|null $type
     * @param array $options
     */
    public function addBefore(\Symfony\Component\Form\FormBuilderInterface $formBuilder, string $targetFieldName, $newChild, ?string $type = null, array $options = []): void
    {
    }
}
