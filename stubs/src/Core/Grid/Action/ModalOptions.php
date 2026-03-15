<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action;

/**
 * Class ModalOptions used to configure modal used in actions like SubmitBulkAction
 */
class ModalOptions
{
    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }
    /**
     * @return array
     */
    public function getOptions(): array
    {
    }
    /**
     * @param array $options
     *
     * @return ModalOptions
     */
    public function setOptions(array $options): \PrestaShop\PrestaShop\Core\Grid\Action\ModalOptions
    {
    }
    /**
     * @param OptionsResolver $resolver
     */
    protected function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
