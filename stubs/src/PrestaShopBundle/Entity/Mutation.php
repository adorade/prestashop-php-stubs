<?php

namespace PrestaShopBundle\Entity;

/**
 * Mutation entity allows to track a modification/mutation performed on a table, usually in the BO, but it could
 * also allow tracking some modification in FO like a payment module changing an order status.
 *
 * As such the mutation needs to hold three mandatory elements:
 * - mutation table: which table was modified
 * - mutation row ID: ID identifying which row of the modified table was modified
 * - action performed (create, update, delete) identified by an enum to remain small in DB
 * - mutator type: Employee, ApiClient or Module
 * - mutator identifier: Identifier of associated mutator (usually an int matching the row, but can be a technical name for a module)
 *
 * @ORM\Table
 *
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\MutationRepository")
 */
class Mutation
{
    public function getId(): int
    {
    }
    public function getMutationTable(): string
    {
    }
    public function setMutationTable(string $mutationTable): static
    {
    }
    public function getMutationRowId(): int
    {
    }
    public function setMutationRowId(int $mutationRowId): static
    {
    }
    public function getAction(): \PrestaShopBundle\Entity\MutationAction
    {
    }
    public function setAction(\PrestaShopBundle\Entity\MutationAction $action): static
    {
    }
    public function getMutatorType(): \PrestaShopBundle\Entity\MutatorType
    {
    }
    public function setMutatorType(\PrestaShopBundle\Entity\MutatorType $mutatorType): static
    {
    }
    public function getMutatorIdentifier(): string
    {
    }
    public function setMutatorIdentifier(string $mutatorIdentifier): static
    {
    }
    public function getMutationDetails(): ?string
    {
    }
    public function setMutationDetails(?string $mutationDetails): static
    {
    }
    public function getDateAdd(): \DateTime
    {
    }
    /**
     * Now we tell doctrine that before we persist or update we call the updateTimestamps() function.
     *
     * @ORM\PrePersist
     *
     * @ORM\PreUpdate
     */
    public function updateTimestamps()
    {
    }
}
