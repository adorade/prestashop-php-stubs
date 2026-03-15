<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class StatusChoiceProvider is responsible for providing choices for list statuses filter criteria.
 */
final class StatusChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * StatusChoiceProvider constructor.
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
