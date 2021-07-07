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
    private $hosts = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $databaseHandler;
    private $statement;
    private $error;


    public function __construct()
    {
        
    }
}
