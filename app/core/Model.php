<?php


class Model
{
    /*
     * Creates Database (PDO) instance with data base configuration in config.php
     */
    function __construct()
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);
    }
}