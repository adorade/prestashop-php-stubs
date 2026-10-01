<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler;

/**
 * Defines interface for handling identifiable object's form.
 */
interface FormHandlerInterface
{
    /**
     * Handles form by creating new object.
     *
     * @param \Symfony\Component\Form\FormInterface $form
     *
     * @return FormHandlerResultInterface
     */
    public function handle(\Symfony\Component\Form\FormInterface $form);
    /**
     * Handles form for given object.
     *
     * @param int $id
     * @param \Symfony\Component\Form\FormInterface $form
     *
     * @return FormHandlerResultInterface
     */
    public function handleFor($id, \Symfony\Component\Form\FormInterface $form);
}
