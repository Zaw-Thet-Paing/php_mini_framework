<?php

$router->get('', [PagesController::class, 'home']);
$router->get('about', [PagesController::class, 'about']);
$router->get('contact', [PagesController::class, 'contact']);