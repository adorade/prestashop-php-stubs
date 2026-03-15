<?php

namespace PrestaShop\PrestaShop\Adapter\Tab\CommandHandler;

class UpdateTabStatusByClassNameHandler implements \PrestaShop\PrestaShop\Core\Domain\Tab\CommandHandler\UpdateTabStatusByClassNameHandlerInterface
{
    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tab\Command\UpdateTabStatusByClassNameCommand $command): void
    {
    }
}
