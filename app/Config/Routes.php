<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/latihan1', 'Latihan1::index');
$routes->get('/penjumlahan/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->post('/contact', 'Page::contact'); 

$routes->get('/', 'Page::home');
$routes->get('/pribadi', 'Page::pribadi');
$routes->get('/pendidikan', 'Page::pendidikan');
$routes->get('/hobby', 'Page::hobby');

$routes->get('kasus1', 'Kasus1::index');
$routes->post('kasus1/hasil', 'Kasus1::hasil');
$routes->get('/article', 'Article::index');

$routes->get('article/(:segment)', 'Article::show/$1');