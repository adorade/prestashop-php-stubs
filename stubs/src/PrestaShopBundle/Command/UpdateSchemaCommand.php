<?php

namespace PrestaShopBundle\Command;

class UpdateSchemaCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(string $databaseName, string $databasePrefix, \Doctrine\ORM\EntityManager $manager)
    {
    }
    protected function configure()
    {
    }
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    public function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    /**
     * Drop foreign keys from the database
     *
     * @param Connection $connection Database connection to use to clear foreign keys
     * @param OutputInterface $output The output renderer
     *
     * @return int The number of affected rows
     */
    public function dropExistingForeignKeys(\Doctrine\DBAL\Connection $connection, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
    /**
     * Remove DROP TABLE queries
     *
     * @param array $queries List of SQL queries to parse
     *
     * @return array Queries that have been removed
     */
    public function removeDropTables(array &$queries): array
    {
    }
    /**
     * Remove ALTER TABLE queries
     *
     * @param array $queries List of SQL queries to parse
     * @param array $removedTables Tables removed by previous methods
     *
     * @return void
     */
    public function removeAlterTables(array &$queries, array $removedTables): void
    {
    }
    /**
     * Remove duplicated DROP FOREIGN KEY queries
     *
     * @param array $queries List of SQL queries to parse
     *
     * @return void
     */
    public function removeDuplicateDropForeignKeys(array &$queries): void
    {
    }
    /**
     * Remove ADD CONSTRAINT queries
     *
     * @param array $queries List of SQL queries to parse
     *
     * @return void
     */
    public function removeAddConstraints(array &$queries): void
    {
    }
    /**
     * Move constraints to the top of the list
     *
     * @param array $queries List of SQL queries to parse
     *
     * @return array The new order
     */
    public function moveConstraints(array &$queries): array
    {
    }
    /**
     * Put back DEFAULT fields, since it cannot be described in the ORM model
     *
     * @param Connection $connection Database connection to use
     * @param array $queries List of SQL queries to parse
     *
     * return void
     */
    public function clearQueries(\Doctrine\DBAL\Connection $connection, array &$queries): void
    {
    }
}
