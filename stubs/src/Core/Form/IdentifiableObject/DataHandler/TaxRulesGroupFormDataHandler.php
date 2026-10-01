<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted tax form data
 */
class TaxRulesGroupFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupConstraintException
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritDoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupConstraintException
     */
    public function update($id, array $data)
    {
    }
}
