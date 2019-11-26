<?php

if(!isset($_SESSION)) session_start();

//loda environment varialbe

require_once  __DIR__ .'/../app/config/_env.php';
require_once  __DIR__ .'/../app/routing/routes.php';