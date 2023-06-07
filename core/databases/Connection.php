<?php

class Connection
{
    public function __construct()
    {
        
    }

    public static function make($database)
    {
        return new PDO(
            "{$database['host']};dbname={$database['dbname']}",
            $database['dbuser'], $database['dbpassword']
        );
    }
}