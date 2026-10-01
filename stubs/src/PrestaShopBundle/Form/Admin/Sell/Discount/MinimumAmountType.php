<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

/**
 * Responsible for creating form for price reduction
 */
class MinimumAmountType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider)
    {
    }
    public static function getSubscribedEvents(): array
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function adaptValueField(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}
