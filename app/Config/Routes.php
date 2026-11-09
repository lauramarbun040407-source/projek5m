<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('User', 'User::index');
$routes->get('User/add', 'User::add');
$routes->post('User/store', 'User::store');
$routes->get('User/edit/(:num)', 'User::edit/$1');
$routes->post('User/update/(:num)', 'User::update/$1');
$routes->get('User/delete/(:num)', 'User::delete/$1');

$routes->get('Kategori', 'Kategori::index');
$routes->get('Kategori/add', 'Kategori::add');
$routes->post('Kategori/store', 'Kategori::store');
$routes->get('Kategori/edit/(:num)', 'Kategori::edit/$1');
$routes->post('Kategori/update/(:num)', 'Kategori::update/$1');
$routes->get('Kategori/delete/(:num)', 'Kategori::delete/$1');

$routes->get('Welcome', 'Welcome::index');
$routes->get('Pengguna', 'Pengguna::index');
$routes->get('About', 'About::index');
$routes->get('Layanan', 'Layanan::index');
$routes->get('Kontak', 'Kontak::index');