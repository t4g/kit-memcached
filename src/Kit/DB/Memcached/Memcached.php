<?php
/**
 * Kitable Memcached
 * User: t4g
 * Date: 04/12/2013
 * Time: 18:55
 */



namespace Kit\DB\Memcached;




class Memcached extends \Memcached {

    /**
     * Contains the instance to memcache;
     * @var null
     */
    static protected $_instMemcached = null;


    /**
     * Contains the instance specific MemcachedOptions
     * @var null
     */
    static protected $_instConfiguration = null;


    /**
     * Contains the instance specific Connector
     * @var null
     */
    static protected $_instConnector = null;


    /**
     * Contains the prefix for this memcache
     * @var null
     */
    static protected $_prefix = null;


    /**
     * KitMemcached Constructor
     * @param                    $key_prefix
     * @param MemcachedConnector $connector
     * @internal param bool        $safemode
     * @return \Kit\DB\Memcached\Memcached
     */
    function __construct($key_prefix, MemcachedConnector $connector )
    {
        // Construct parent
        parent::__construct();


        // Set param prefix
        self::$_prefix = crc32($key_prefix);


        // Inst: Object Connector class
        self::$_instConnector = $connector;


        // Void: Apply Connector container to base Memcached
        $this->applyConnector($this, self::$_instConnector);

        return new MemcachedConfiguration();

    }


    /**
     * Apply a class Connector to Memcached instance
     * @todo Add support for priority
     * @param MemcachedBase      $memcached
     * @param MemcachedConnector $connector
     */
    private function applyConnector(\Memcached &$memcached, MemcachedConnector &$connector)
    {
        foreach($connector->getServersArray() AS $addr)

        {
            $memcached->addServer(/* ip */ $addr[0], /* port */ $addr[1]);
        }
    }


} 