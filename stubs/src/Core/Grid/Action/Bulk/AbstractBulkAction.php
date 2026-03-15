<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Bulk;

abstract class AbstractBulkAction implements \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionInterface
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $icon = '';
    /**
     * @param string $id
     */
    public function __construct($id)
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
    public function getId()
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
     * @return string
     */
    public function getIcon(): string
    {
    }
    /**
     * @param string $icon
     *
     * @return static
     */
    public function setIcon(string $icon): self
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
