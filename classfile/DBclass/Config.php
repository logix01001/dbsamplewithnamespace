<?php
namespace classfile\DBclass;
$base = __DIR__ . '/../../';
require  $base .'//core/settings.php';

trait Config {
    
    public $driver;
    public $driverdefault;
    

    public function drivercon($connection = null){

        if($connection == null){
            $connection = $GLOBALS['connections'][$GLOBALS['defaultconnection']];
        }

        $this->driverdefault = $connection['driver'];
        $driver = $connection;
       
        switch( $this->driverdefault){

            case 'mysql' : 
                $connquery = new MysqlFactory($driver);
                
                $this->driver = $connquery->createConnection();
                $this->modelingQuery( $connquery->createQuery() );  

                break;
            case 'mssql' : 
                
                if(in_array('sqlsrv',$this->drivers_available)){
                    $this->driver = new MssqlCon($driver['host'],$driver['dbname'],$driver['user'],$driver['password']);
                    $this->driver->connect();
                    $this->modelingQuery(new MysqlQuery($this->driver));
                    break;
                }else{
                    throw new \Exception('NO DRIVER FOUND.');
                }
        }
        
    }
}

