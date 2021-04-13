<?php
namespace classfile\DBclass;

use classfile\DBclass\MysqlCon;
use classfile\DBclass\MysqlQuery;

class MysqlFactory extends ConnQueryFactory
{

    
    public function createConnection()
    {
        $this->driver =  new MysqlCon($this->driverOption['host'],$this->driverOption['dbname'],$this->driverOption['user'],$this->driverOption['password']);
        $this->driver->connect();

        return $this->driver;
    }

    public function createQuery()
    {
        return new MysqlQuery($this->driver);
    }
}