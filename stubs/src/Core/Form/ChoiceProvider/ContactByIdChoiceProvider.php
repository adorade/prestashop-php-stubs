<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ContactByIdChoiceProvider is responsible for providing shop contact choices.
 */
final class ContactByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param ContactRepositoryInterface $contactRepository
     * @param int $langId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Support\ContactRepositoryInterface $contactRepository, $langId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
