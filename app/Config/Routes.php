<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');


$routes->get('/pinjam/pinjam_alat', 'Pinjam::pinjam_alat');
$routes->get('/proyek', 'Proyek::data_proyek');
$routes->get('/proyek/(:any)', 'Proyek::detail/$1');
$routes->get('/proyek/insertProyek', 'Proyek::insertProyek');
$routes->delete('/proyek/hapusProyek/(:num)', 'Proyek::hapusProyek/$1');


$routes->get('/alat', 'Alat::data_alat');
$routes->get('/alat/insertAlat', 'Alat::insertAlat');
$routes->get('/alat/pinjam_alat', 'Pinjam::data_pinjam');
$routes->get('/alat/editAlat/(:segment)', 'Alat::editAlat/$1');
$routes->delete('/alat/(:any)', 'Alat::hapusAlat/$1');
$routes->post('alat/simpanAlat', 'Alat::simpanAlat');
$routes->get('/alat/(:any)', 'Alat::detail/$1');

$routes->setAutoRoute(true);
