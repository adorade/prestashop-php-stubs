<?php

namespace PrestaShopBundle\Install;

class SqlLoader
{
    /**
     * @var Db
     */
    protected $db;
    /**
     * @var array List of keywords which will be replaced in queries
     */
    protected $metadata = [];
    /**
     * @var array List of errors during last parsing
     */
    protected $errors = [];
    /**
     * @param Db|null $db
     */
    public function __construct(\Db $db = null)
    {
    }
    /**
     * Set a list of keywords which will be replaced in queries.
     *
     * @param array $data
     */
    public function setMetaData(array $data)
    {
    }
    /**
     * Parse a SQL file and execute queries.
     *
     * @deprecated use parseFile()
     *
     * @param string $filename
     * @param bool $stop_when_fail
     */
    public function parse_file($filename, $stop_when_fail = true)
    {
    }
    /**
     * Parse a SQL file and execute queries.
     *
     * @param string $filename
     * @param bool $stop_when_fail
     */
    public function parseFile($filename, $stop_when_fail = true)
    {
    }
    /**
     * Parse and execute a list of SQL queries.
     *
     * @param string $content
     * @param bool $stop_when_fail
     */
    public function parse($content, $stop_when_fail = true)
    {
    }
    /**
     * Get list of errors from last parsing.
     *
     * @return array
     */
    public function getErrors()
    {
    }
}
