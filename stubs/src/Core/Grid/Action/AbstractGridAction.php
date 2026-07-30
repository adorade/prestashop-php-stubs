<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action;

abstract class AbstractGridAction implements \PrestaShop\PrestaShop\Core\Grid\Action\GridActionInterface
{
    /**
     * @param string $id
     */
    public function __construct($id)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIcon()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setIcon($icon)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
    }
    /**
     * Default bulk action options configuration. You can override it if options are needed.
     *
     * @param OptionsResolver $resolver
     */
    protected function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
