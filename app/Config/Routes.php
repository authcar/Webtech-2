<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/latihan1', 'Latihan1::index');
$routes->get('/penjumlahan/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/about', 'Page::about');

$routes->get('/', 'Page::home');
$routes->get('/pribadi', 'Page::pribadi');
$routes->get('/pendidikan', 'Page::pendidikan');
$routes->get('/hobby', 'Page::hobby');

$routes->get('kasus1', 'Kasus1::index');
$routes->post('kasus1/hasil', 'Kasus1::hasil');
$routes->get('/article', 'Article::index');

$routes->get('article/(:segment)', 'Article::show/$1');
$routes->match(['get','post'], 'contact', 'Page::contact');

$routes->get('/admin', 'Admin\Dashboard::index');
$routes->get('/admin/dashboard', 'Admin\Dashboard::index');
$routes->get('/admin/post', 'Admin\Post::index');
$routes->get('/admin/feedback', 'Admin\Feedback::index');
$routes->get('/admin/setting', 'Admin\Setting::index');

