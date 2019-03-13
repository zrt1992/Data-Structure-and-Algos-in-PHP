<?php
use Codecourse\Repositories;
use Codecourse\Filter;
use Symfony\Component\HttpFoundation\Request;


require_once 'app/start.php';

//$user = new Repositories\UserRepository();
//$filter = new Filter\Filter();
$request=Request::createFromGlobals();
$request->query->get('hop');

