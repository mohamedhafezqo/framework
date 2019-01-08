<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use App\Factories\ControllerFactory;

$routes = new RouteCollection();
$controllerFactory = ControllerFactory::getInstance();


$routes->add('article_post', new Route('/article', array(
    'title' => null,
    'description' => null,
    '_controller' => [$controllerFactory->create('article'), 'post'],
), array(), array(), '', array(), array('POST')));

$routes->add('article', new Route('/article', [
    '_controller' => [$controllerFactory->create('article'), 'index']
]));

$routes->add('article_delete', new Route('/article/{id}', array(
    '_controller' => [$controllerFactory->create('article'), 'delete'],
), array(), array(), '', array(), array('DELETE')));

$routes->add('article_show', new Route('/article/{id}', [
    'id' => null,
    '_controller' => [$controllerFactory->create('article'), 'show']
]));

$routes->add('bye', new Route('/bye'));

return $routes;
//DInjection, middleware// entities, repos, services