<?php

// $DATABASE_URL = parse_url(getenv("DATABASE_URL"));
// $url='postgres://ychagjlgrchvxe:7dbd3ef007536e830163a35a5135ff567752197f6ac5d036dff5f11c70e2b4a1@ec2-54-243-128-95.compute-1.amazonaws.com:5432/d8i64tb7mhd5pr';
$url='mysql://bc6687a1e7b519:af5f2af0@us-cdbr-iron-east-01.cleardb.net/heroku_ba6c97aaea40e14?reconnect=true';
  // $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  // $host = $url['host'];
  // $username = $url['user'];
  // $password = $url['pass'];
  // $database = substr($url["path"], 1);
  $host = 'us-cdbr-iron-east-01.cleardb.net';
  $username = 'bc6687a1e7b519';
  $password = 'af5f2af0';
  $database = 'heroku_ba6c97aaea40e14';

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'us-cdbr-iron-east-01.cleardb.net'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'heroku_ba6c97aaea40e14'),
            'username' => env('DB_USERNAME', 'bc6687a1e7b519'),
            'password' => env('DB_PASSWORD', 'af5f2af0'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ],
        //
        // 'pgsql' => [
        //     'driver' => 'pgsql',
        //     'host' => $DATABASE_URL['host'],
        //     'port' => $DATABASE_URL['port'],
        //     'database' => ltrim($DATABASE_URL['path'], "/"),
        //     'username' => $DATABASE_URL['user'],
        //     'password' => $DATABASE_URL['pass'],
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        //     'schema' => 'public',
        //     'sslmode' => 'prefer',
        // ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

    ],

];
