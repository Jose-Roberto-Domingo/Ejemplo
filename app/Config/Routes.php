<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Mascota','Mascota::index');
$routes->get('/Mascota/mostrar','Mascota::mostrar');
$routes->get('/Mascota/agregar','Mascota::agregar');
$routes->get('/Mascota/buscar','Mascota::buscar');
$routes->get('/Mascota/editar/(:num)','Mascota::editar/$1');
$routes->get('/Mascota/delete/(:num)','Mascota::delete/$1');

$routes->post('/Mascota/insert','Mascota::insert');
$routes->post('/Mascota/update','Mascota::update');

$routes->get('/Dietas','Dietas::index');
$routes->get('/Dietas/mostrar','Dietas::mostrar');
$routes->get('/Dietas/agregar','Dietas::agregar');
$routes->post('/Dietas/agregar','Dietas::agregar');
$routes->get('/Dietas/buscar','Dietas::buscar');
$routes->get('/Dietas/editar/(:num)','Dietas::editar/$1');
$routes->get('/Dietas/delete/(:num)','Dietas::delete/$1');

$routes->post('/Dietas/insert','Dietas::insert');
$routes->post('/Dietas/update','Dietas::update');

$routes->get('/Adoptador','Adoptador::index');
$routes->get('/Adoptador/mostrar','Adoptador::mostrar');
$routes->get('/Adoptador/agregar','Adoptador::agregar');
$routes->post('/Adoptador/agregar','Adoptador::agregar');
$routes->get('/Adoptador/buscar','Adoptador::buscar');
$routes->get('/Adoptador/editar/(:num)','Adoptador::editar/$1');
$routes->get('/Adoptador/delete/(:num)','Adoptador::delete/$1');

$routes->post('/Adoptador/insert','Adoptador::insert');
$routes->post('/Adoptador/update','Adoptador::update');

$routes->get('/Raza','Raza::index');
$routes->get('/Raza/mostrar','Raza::mostrar');
$routes->get('/Raza/agregar','Raza::agregar');
$routes->post('/Raza/agregar','Raza::agregar');
$routes->get('/Raza/buscar','Raza::buscar');
$routes->get('/Raza/editar/(:num)','Raza::editar/$1');
$routes->get('/Raza/delete/(:num)','Raza::delete/$1');

$routes->post('/Raza/insert','Raza::insert');
$routes->post('/Raza/update','Raza::update');
