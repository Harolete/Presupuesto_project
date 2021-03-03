<?php

namespace Src\Services;

use Monolog\Logger as MonoLogger;
use Monolog\Handler\StreamHandler;


/**
 * Servicio que se encarga de realizar los logs
 */
class Logger extends MonoLogger{

    public function __construct($typeOfFile)
    {
        parent::__construct('',[new StreamHandler( __DIR__.'/../../logs/'.date('d-M-Y').$typeOfFile.'.log' )]);
    }

    /**
     * Realiza los logs de los metodos donde sea llamado
     * 
     * @param string    $level      Especifica el nivel del debug
     * @param string    $message    Mensaje para identificar el log
     * @param string    $context    Datos que retorna o maneja el metodo
     * @param string    $method     Namespace del metodo donde se llama el log (__METHOD__)
     * @return void
     */
    public function generate($level, $message, $context, $method)
    {
        $message = $method." - ".$message;

        switch($level){
            case "debug":
                $this->debug($message, [$context]);
            break;
            
            case "info":
                $this->info($message, [$context]);
            break;
            
            case "notice":
                $this->notice($message, [$context]);
            break;
            
            case "warning":
                $this->warning($message, [$context]);
            break;
            
            case "error":
                $this->error($message, [$context]);
            break;
            
            case "critical":
                $this->critical($message, [$context]);
            break;
            
            case "alert":
                $this->alert($message, [$context]);
            break;
            
            case "emergency":
                $this->emergency($message, [$context]);
            break;

            default:
                $this->debug($message, [$context]);
            break;
        }
    }
}