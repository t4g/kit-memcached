<?php
/**
 * Kitable Memcached
 * User: t4g
 * Date: 04/12/2013
 * Time: 18:55
 */


namespace Kit\DB\Memcached;

/**
 * Class MemcachedSafe
 * @package Kit\DB\Memcached
 */
class MemcachedSafe {


    /**
     * Contains the instance to memcached;
     * @var null
     */
    static protected $_instMemcached = null;


    /**
     * KitMemcachedSafe Constructor
     * @param $key_prefix
     * @param MemcachedConnector $connector
     * @internal param bool $safemode
     * @return \Kit\DB\Memcached\MemcachedSafe
     */
    public function __construct($key_prefix, MemcachedConnector $connector)
    {


        if($this->isMemcachedInstalled())
        {
            self::$_instMemcached = new Memcached($key_prefix, $connector);
        }
        else
        {
            self::$_instMemcached = new MemcachedSafe\stdFalseClass();
        }


    }


    /**
     * Test if memcached is available
     * @todo Expand later if needed
     * @return bool
     */
    public function isMemcachedInstalled(){
        if(class_exists('\Memcached', FALSE))
        {
            return TRUE;
        }
        return FALSE;
    }


    /**
     * Magic extend class
     */
    public function __call($method, $args)
    {
        return call_user_func_array(array(self::$_instMemcached,$method),$args);
    }


    /**
     * Magic extend class
     */
    static function __callStatic($method, $args)
    {
        $context = &self::$_instMemcached;
        return call_user_func_array($context::$method(),$args);
    }



} 