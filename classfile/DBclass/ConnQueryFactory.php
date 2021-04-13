<?php
namespace classfile\DBclass;
/**
 * Create Abstract Factory
 * this class handle factory 
 * for designated connection and query
 */
abstract class ConnQueryFactory
{
    protected $driverOption;
    protected $driver;

    public function __construct($driver)
    {
        $this->driverOption = $driver;
    }
    abstract public function createConnection();
    abstract public function createQuery();
}