<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/login', 'Auth::login');
$routes->post('auth/cekLogin', 'Auth::cekLogin');
$routes->get('auth/login', 'Auth::login');
$routes->get('/auth/keluar', 'Auth::keluar');


$routes->get('/proyek', 'Proyek::data_proyek');
$routes->get('/proyek/(:num)', 'Proyek::detail/$1');
$routes->get('/proyek/insertProyek', 'Proyek::insertProyek');
$routes->post('/proyek/simpanInsertProyek', 'Proyek::simpanInsertProyek');
$routes->post('/proyek/hapus', 'Proyek::hapus');
$routes->get('/proyek/hapusProyek/(:num)', 'Proyek::hapusProyek/$1');
$routes->get('/proyek/editProyek/(:num)', 'Proyek::editProyek/$1');
$routes->post('/proyek/updateProyek', 'Proyek::updateProyek');


$routes->get('/alat', 'Alat::data_alat');
$routes->get('/alat/insertAlat', 'Alat::insertAlat');
$routes->get('/alat/editAlat/(:segment)', 'Alat::editAlat/$1');
// $routes->delete('/alat/(:any)', 'Alat::hapusAlat/$1');
$routes->post('alat/simpanAlat', 'Alat::simpanAlat');
$routes->post('alat/updateAlat/(:num)', 'Alat::updateAlat/$1');
$routes->post('alat/hapus', 'Alat::hapus');
$routes->get('/alat/hapusAlat/(:num)', 'Alat::hapusAlat/$1');
$routes->get('/alat/(:any)', 'Alat::detail/$1');

$routes->get('/pinjam/pinjam_alat', 'Pinjam::pinjam_alat');
$routes->post('/pinjam/pinjam_alat', 'Pinjam::pinjam_alat');
$routes->get('/alat/pinjam_alat', 'Pinjam::data_pinjam');
$routes->get('/pinjam/hapusPinjam/(:num)', 'Pinjam::hapusPinjam/$1');
// $routes->setAutoRoute(true);
