<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

/**
 * Class Column defines most simple column in the grid that renders raw data.
 */
class DataColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
