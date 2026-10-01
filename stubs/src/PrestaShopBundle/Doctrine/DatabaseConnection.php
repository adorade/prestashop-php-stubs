<?php

namespace PrestaShopBundle\Doctrine;

/**
 * This wrapper connection class is used to prevent a bug in CLI when the shop is not configured yet.
 * The problem is that Doctrine warm up automatically tries to get the database driver version vy connecting
 * to it, but when no configuration is set yet the connection obviously fails.
 *
 * There is a possible solution to force server_version in the doctrine DBAL configuration but since PrestaShop
 * is a framework that can be installed with different database versions we can't hard-code it, besides forcing
 * the version disables this automatic version detection feature.
 *
 * (See https://github.com/doctrine/DoctrineBundle/issues/673 for more details)
 *
 * So this class acts as a fallback when the connection tries to get the database platform but fails we catch the
 * exception, we check if the parameters file has been configured. If it doesn't exist then we are in a case where
 * the automatic detection failure can be ignored, in other case we throw the caught exception and change nothing to
 * the original behaviour thus reducing the impact of this wrapper as much as possible.
 *
 * In the case we handle a fallback we use MySQL 5.7 as the default platform.
 */
class DatabaseConnection extends \Doctrine\DBAL\Connection
{
    public function getDatabasePlatform()
    {
    }
}
