<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Class MetaFormDataHandler is responsible to handle creation and update logic for meta form.
 */
final class MetaFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaException
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaException
     */
    public function update($metaId, array $data)
    {
    }
}
