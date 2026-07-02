<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===== HALAMAN GUEST (Tidak Perlu Login) =====
$routes->get('login', 'AuthController::index');
$routes->post('loginProcess', 'AuthController::loginProcess');

// ===== HALAMAN UNTUK SEMUA USER YANG LOGIN (Admin & Kasir) =====
$routes->group('', ['filter' => 'auth'], function($routes) {
    
    // 1. HALAMAN UTAMA
    $routes->get('/', 'Home::index');
    $routes->get('home', 'Home::index');
    $routes->get('tentang', 'Tentang::index');
    $routes->get('layanan', 'Layanan::index');
    $routes->get('faq', 'Faq::index');
    $routes->get('logout', 'AuthController::logout');

    // 2. ROUTES CRUD PELANGGAN
    $routes->get('pelanggan', 'Pelanggan::index');
    $routes->get('pelanggan/create', 'Pelanggan::create');
    $routes->post('pelanggan/store', 'Pelanggan::store');
    $routes->get('pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
    $routes->post('pelanggan/update/(:num)', 'Pelanggan::update/$1');
    $routes->get('pelanggan/delete/(:num)', 'Pelanggan::delete/$1');
    $routes->get('pelanggan/download-pdf', 'Pelanggan::downloadPdf');

    // 3. ROUTES CART (KERANJANG BELANJA)
    $routes->get('cart', 'CartController::index');
    $routes->post('cart/add', 'CartController::add');
    $routes->post('cart/update/(:num)', 'CartController::update/$1');
    $routes->get('cart/remove/(:num)', 'CartController::remove/$1');
    $routes->get('cart/clear', 'CartController::clear');
    $routes->get('cart/checkout', 'CartController::checkout');
    $routes->post('cart/process-checkout', 'CartController::processCheckout');
});

// ===== HALAMAN KHUSUS ADMIN =====
$routes->group('', ['filter' => 'admin'], function($routes) {
    $routes->get('laporan', 'Laporan::index');
    $routes->get('laporan/export-pdf', 'Laporan::exportPdf');
    $routes->get('cetak-nota/(:num)', 'Laporan::cetakNota/$1');
});

$routes->group('', ['filter' => 'auth'], function($routes) {
    // Routes untuk semua user (admin & kasir)
    $routes->get('pelanggan', 'Pelanggan::index');
    $routes->get('pelanggan/create', 'Pelanggan::create');
    $routes->post('pelanggan/store', 'Pelanggan::store');
    $routes->get('pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
    $routes->post('pelanggan/update/(:num)', 'Pelanggan::update/$1');
    $routes->get('pelanggan/delete/(:num)', 'Pelanggan::delete/$1');
    $routes->get('pelanggan/download-pdf', 'Pelanggan::downloadPdf'); // Route untuk PDF
});

// Routes untuk semua user (admin & kasir)
$routes->group('', ['filter' => 'auth'], function($routes) {
    // ... routes existing ...
    
    // Routes Transaksi
    $routes->get('transaksi', 'Laundry::index');
    $routes->get('laundry/create', 'Laundry::create');
    $routes->post('laundry/store', 'Laundry::store');
    $routes->get('laundry/edit/(:num)', 'Laundry::edit/$1');
    $routes->post('laundry/update/(:num)', 'Laundry::update/$1');
    $routes->post('laundry/delete/(:num)', 'Laundry::delete/$1');
    $routes->get('laundry/view/(:num)', 'Laundry::view/$1');
    $routes->post('laundry/update-status/(:num)', 'Laundry::updateStatus/$1');
});