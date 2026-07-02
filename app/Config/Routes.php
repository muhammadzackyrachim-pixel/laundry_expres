<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===== HALAMAN GUEST (Tidak Perlu Login) =====
$routes->get('login', 'AuthController::index');
$routes->post('loginProcess', 'AuthController::loginProcess');

// ===== HALAMAN ADMIN & KASIR (Perlu Login) =====
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('home', 'Home::index');
    $routes->get('tentang', 'Tentang::index');
    $routes->get('layanan', 'Layanan::index');
    $routes->get('logout', 'AuthController::logout');
    
    // Routes untuk semua user (admin & kasir)
    $routes->get('pelanggan', 'Pelanggan::index');
    $routes->get('pelanggan/create', 'Pelanggan::create');
    $routes->post('pelanggan/store', 'Pelanggan::store');
    $routes->get('pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
    $routes->post('pelanggan/update/(:num)', 'Pelanggan::update/$1');
    $routes->get('pelanggan/delete/(:num)', 'Pelanggan::delete/$1');
});

// ===== HALAMAN KHUSUS ADMIN =====
$routes->group('', ['filter' => 'admin'], function($routes) {
    $routes->get('laporan', 'Laporan::index');
});