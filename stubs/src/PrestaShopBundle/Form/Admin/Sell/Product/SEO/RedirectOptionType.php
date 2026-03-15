<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\SEO;

class RedirectOptionType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param RouterInterface $router
     * @param DataTransformerInterface $targetTransformer
     * @param EventSubscriberInterface $eventSubscriber
     * @param string $employeeIsoCode
     * @param int $homeCategoryId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\Routing\RouterInterface $router, \Symfony\Component\Form\DataTransformerInterface $targetTransformer, \Symfony\Component\EventDispatcher\EventSubscriberInterface $eventSubscriber, string $employeeIsoCode, int $homeCategoryId)
    {
    }
    /**
     * {@inheritdoc}
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
