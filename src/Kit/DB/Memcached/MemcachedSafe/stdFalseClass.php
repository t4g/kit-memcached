<?php
/**
 * Kitable Memcached
 * User: t4g
 * Date: 04/12/2013
 * Time: 18:55
 */


namespace Kit\DB\Memcached\MemcachedSafe;


class stdFalseClass {


    /**
     * MemcachedFalse Constructor
     * @param           $key_prefix
     * @param Connector $connector
     * @internal param bool $safemode
     * @return \Kit\DB\Memcached\MemcachedSafe\stdFalseClass
     */
    public function __construct($key_prefix=null, $connector=null)
    {


    }


    /**
     * Magic extend class
     */
    public function __call($method, $args)
    {
        return FALSE;
    }


    /**
     * Magic extend class
     */
    public static function __callStatic($method, $args)
    {
        return FALSE;
    }


    /**
     * Magic extend class
     */
    public function __set($n, $v)
    {

    }


    /**
     * Magic extend class
     */
    public function __get($n)
    {
        return FALSE;
    }



} 