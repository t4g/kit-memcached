<?php
/**
 * Kitable Memcached
 * User: t4g
 * Date: 04/12/2013
 * Time: 18:55
 */


namespace Kit\DB\Memcached;

class MemcachedConfiguration {

    /**
     * Contains the instance to memcache;
     * @var null
     */
    static protected $_instMemcached = null;

    /**
     * Contains the instance specific MemcachedOptions
     * @var null
     */
    static protected $_configuration = null;


    function __constructor(String $key_prefix, Connector $servers)
    {


    }

    function test(){
        echo "TESTTEST";
    }



} 