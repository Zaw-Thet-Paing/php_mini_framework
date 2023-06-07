<?php

require "vendor/autoload.php";
require "core/bootstrap.php";


show_error_logs();

Router::load("web.php")->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);