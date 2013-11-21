<?php
/**
 * Basic test
 * User: soap
 * Date: 04/12/2013
 * Time: 21:18
 */


/**
 * Procedural
 * =================================================
 */


/*
 * Load files
 */
require('../vendor/autoload.php');



/*
 * Connect
 */
$servers  = new Kit\DB\Memcached\MemcachedConnector( 'localhost', '11211' );

$cache    = new Kit\DB\Memcached\Memcached( 'my_plugin_name', $servers );



/*
 * Set a value
 */
$cache->add( 'test_key', 'test_value' );



/*
 * Read a value
 */
echo $cache->get( 'test_key' );

