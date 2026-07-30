<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted tax form data
 */
class TaxRulesGroupFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @var CommandBusInterface
     */
    protected $commandBus;
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * Create object from form data.
     *
     * @param array $data
     *
     * @return mixed
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritDoc}
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function update($id, array $data)
    {
    }
}
