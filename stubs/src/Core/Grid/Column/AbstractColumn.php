<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column;

/**
 * Class AbtractColumn implements reusable column methods.
 */
abstract class AbstractColumn implements \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface
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
     * {@inheritdoc}
     */
    public function getOption(string $name)
    {
    }
    /**
     * Default column options configuration. You can override or extend it needed options.
     *
     * @param OptionsResolver $resolver
     */
    protected function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
