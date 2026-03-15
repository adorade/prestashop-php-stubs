<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Stock;

class VirtualProductFileType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param int $maxFileSizeInMegabytes
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, int $maxFileSizeInMegabytes, \Symfony\Component\Routing\RouterInterface $router, \Symfony\Component\EventDispatcher\EventSubscriberInterface $virtualProductFileListener)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
