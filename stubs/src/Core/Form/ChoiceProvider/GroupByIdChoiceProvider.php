<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class GroupByIdChoiceProvider is responsible for providing customer group choices with Id values.
 */
final class GroupByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param GroupDataProvider $groupDataProvider
     * @param int $langId
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider $groupDataProvider, $langId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
