<?php

namespace PrestaShop\PrestaShop\Core\Mutation;

/**
 * The mutation track service helps to add mutation from any service in the code base, it automatically
 * fills the related potential modifiers (employee and/or api client from the context). The purpose is
 * to let it automatically set these associations based on the context services, except for module which
 * must be done manually.
 */
class MutationTracker
{
    public function __construct(private readonly \Doctrine\ORM\EntityManagerInterface $entityManager, private readonly \PrestaShop\PrestaShop\Core\Context\ApiClientContext $apiClientContext, private readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext)
    {
    }
    /**
     * Add a mutation associated to the logged in Employee if present.
     */
    public function addMutationForEmployee(string $mutationTable, int $mutationRowId, \PrestaShopBundle\Entity\MutationAction $action, string $mutationDetails = ''): void
    {
    }
    /**
     * Adds mutation associated to the authenticated ApiClient if present.
     */
    public function addMutationForApiClient(string $mutationTable, int $mutationRowId, \PrestaShopBundle\Entity\MutationAction $action, string $mutationDetails = ''): void
    {
    }
    /**
     * Add mutation for module, the identifier must be specified explicitly since it cannot be guesses based on context.
     */
    public function addMutationForModule(string $mutationTable, int $mutationRowId, \PrestaShopBundle\Entity\MutationAction $action, string $moduleIdentifier, string $mutationDetails = ''): void
    {
    }
}
