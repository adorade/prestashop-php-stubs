<?php

namespace PrestaShopBundle\Form\Admin\Sell\Category\SEO;

class RedirectOptionType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \Symfony\Component\Form\DataTransformerInterface $targetTransformer, private readonly \Symfony\Component\EventDispatcher\EventSubscriberInterface $eventSubscriber, private readonly int $homeCategoryId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
