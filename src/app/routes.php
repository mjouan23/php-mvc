<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'Index', 'action' => 'home']);

// Routes in main controllers/ folder (Namespace \Controllers)
$router->addRoute('{controller}/{action}');
$router->addRoute('{controller}/{action}/{id:\d+}');
$router->addRoute('{controller}/{id:\d+}/{action}');

$router->setParams(getUri());