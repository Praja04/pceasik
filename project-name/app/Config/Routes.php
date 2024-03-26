<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /* ----------Routes View ---------- */
$routes->get('/user', 'User::index');

$routes->get('/alt', 'User::ALT1');


/* -----------Routes Authentication ------------ */
$routes->get('/', 'AuthController::login'); // login

$routes->get('login', 'AuthController::login'); // Menampilkan halaman login

$routes->post('login', 'AuthController::login_action'); // Menangani proses login

$routes->get('register', 'AuthController::register'); // Menampilkan halaman registrasi

$routes->post('register', 'AuthController::register_action'); // Menangani proses registrasi

$routes->get('logout', 'AuthController::logout'); // Menangani proses logout





/* -----------------Routes Load Data --------------*/
$routes->get('user/getData', 'User::getData');//Menangani proses Load data HSM 1 Line 6

$routes->get('user/getData2', 'User::getData2');//Menangani proses Load data HSM 2 Line 6

$routes->get('alt/getDataALT1', 'User::getDataALT1');//Menangani proses Load data HSM 2 Line 6

$routes->get('alt/getDataALT2', 'User::getDataALT2');//Menangani proses Load data HSM 2 Line 6


/* -----------------Routes Download Data --------------*/
$routes->get('user/downloadCSV', 'User::downloadCSV');//Menangani proses download HSM 1 Lin e 6

$routes->get('user/downloadCSV2', 'User::downloadCSV2');//Menangani proses download HSM 2 Line 6

$routes->get('alt/downloadCSVALT1', 'User::downloadCSV_ALT1');//Menangani proses download ALT 1  Line 6

$routes->get('alt/downloadCSVALT1', 'User::downloadCSV_ALT2');//Menangani proses download ALT 1  Line 6

