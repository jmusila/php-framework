<?php

/**
 * PDO Database class
 * Connect to Database
 * Create prepared statements
 * Bind values
 * Return rows and cells
 */
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $databaseHandler;
    private $statement;
    private $error;


    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //Create PDO Instance
        try {
            $this->databaseHandler = new PDO($dsn, $this->error, $this->pass, $options);
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
            throw $this->error;
        }
    }
}
