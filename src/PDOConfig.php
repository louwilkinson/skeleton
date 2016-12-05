<?php
/**
 *  file for PDOConfig.
 *
 */
namespace Skeleton;

use \PDO;

/**
 *
 * creates database handle for file operations.
 *
 * as in
 *
 * $pdo = new PDOConfig();
 *
 * $ count = $pdo->query("SELECT count(1) FROM country")->fetchColumn();
 * @class PDOConfig
 * 
 * @package Skeleton
 * @author lou wilkinson <lou.e.wilkinson@gmail.com>
 */
class PDOConfig extends PDO
{
    /**
     * database type/engine...mysql, etc
     * @var string
     */
    private $dbtype;
    /**
     * host name
     * @var string
     */
    private $host;
    /**
     * database / schema name
     * @var string
     */
    private $database;
    /**
     * username for db access
     * @var string
     */
    private $user;
    /**
     * password for db access
     * @var string
     */
    private $pass;
    /**
     * PDO options & properties
     * @var setters
     */
    private $opt;

    /**
     * create db handle for subsequent operations
     *
     */
    public function __construct()
    {
        $this->dbtype = 'mysql';
        $this->host = 'localhost';
        $this->database = 'world';
        $this->user = 'root';
        $this->pass = '051979';
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $dns = $this->dbtype . ':dbname=' . $this->database . ";host=" . $this->host;
        parent::__construct($dns, $this->user, $this->pass, $opt);
    }
}
