<?php
/**
 * Kitable Memcached
 * User: t4g
 * Date: 04/12/2013
 * Time: 18:55
 */


namespace Kit\DB\Memcached {


    class MemcachedConnector {

        /**
         * Contains the instance to memcache;
         * @var null
         */
        protected $_servers = array();

        /**
         * @param $ip
         * @param $port
         * @param $priory
         */
        function __construct($ip, $port, $priory=100)
        {
            $this->_servers[] = array($ip, $port, $priory);
        }

        /**
         * @param $ip
         * @param $port
         * @param $priory
         * @return $this
         */
        function addServer($ip, $port, $priory=100)
        {
            $this->_servers[] = array($ip, $port, $priory);
            return $this;
        }

        /**
         * Used internally to get server list
         * @return array
         */
        function getServersArray(){
            return $this->_servers;
        }



    }
}