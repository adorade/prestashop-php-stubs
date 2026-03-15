<?php

namespace PrestaShop\PrestaShop\Adapter\Contact\QueryHandler;

/**
 * Class GetContactForEditingHandler is responsible for getting the data for contact edit page.
 *
 * @internal
 */
final class GetContactForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Contact\QueryHandler\GetContactForEditingHandlerInterface
{
    /**
     * @param DataTransformerInterface $stringArrayToIntegerArrayDataTransformer
     */
    public function __construct(\Symfony\Component\Form\DataTransformerInterface $stringArrayToIntegerArrayDataTransformer)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws ContactException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Query\GetContactForEditing $query)
    {
    }
}
