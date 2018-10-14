<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 25.09.18
 * Time: 0:27
 */


/**
 * Настройка подключения к локальной базе данных
 * конфигурации Development
 */
$config_directories['sync'] = '../config/sync';
$databases['default']['default'] = [
  'database' => 'd8jet',
  'username' => 'postgres',
  'password' => '1q2w3e4r@',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '5432',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\pgsql',
  'driver' => 'pgsql',
];

/**
 * Доверенные хосты для конфигурации
 * Development
 */
$settings['trusted_host_patterns'] = [
    '^d8jet$',
    '^localhost$',
];

/*
 * Базовый URL публичных файлов
 */
$settings['file_public_base_url'] = 'http://d8jet/sites/default/files';

