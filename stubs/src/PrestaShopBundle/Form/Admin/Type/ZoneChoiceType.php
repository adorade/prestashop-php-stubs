<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class is responsible for providing configurable zone choices with -- symbol in front of array.
 */
class ZoneChoiceType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param ConfigurableFormChoiceProviderInterface $zonesChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $zonesChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
