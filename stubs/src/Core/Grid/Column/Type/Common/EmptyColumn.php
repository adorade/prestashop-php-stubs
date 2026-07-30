<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

/**
 * Empty column which displays nothing, mainly used when changing the content of a grid a replacing one column
 * with empty content.
 */
class EmptyColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
    protected function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
