<?php

require "functions.php";
// $config = require "./config.php";

App::bind('config', require "./config.php");

// $database = new QueryBuilder(Connection::make($config['database']));
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));