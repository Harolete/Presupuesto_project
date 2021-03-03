<?php

namespace Test\Services\Logger;

use PHPUnit\Framework\TestCase;
use Src\Services\Logger;

class LoggerServiceTest extends TestCase{

    protected $path;

    protected $service;
     
    public function setUp():void
    {
        $this->service = new Logger('_test');
        $this->path = __DIR__.'/../../../logs/'.date('d-M-Y').'_test.log';
    }

    public function tearDown():void
    {
        unlink($this->path);
    }
   
    public function testLogDebug()
    {        
        $this->service->generate('debug','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists($this->path);

    }

    public function testLogInfo()
    {        
        $this->service->generate('info','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists($this->path);

    }

    public function testLogNotice()
    {        
        $this->service->generate('notice','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists(__DIR__.'/../../../logs/'.date('d-M-Y').'_test.log');

    }

    public function testLogWarning()
    {        
        $this->service->generate('warning','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists(__DIR__.'/../../../logs/'.date('d-M-Y').'_test.log');

    }

    public function testLogError()
    {        
        $this->service->generate('error','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists(__DIR__.'/../../../logs/'.date('d-M-Y').'_test.log');

    }

    public function testLogCritical()
    {        
        $this->service->generate('critical','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists(__DIR__.'/../../../logs/'.date('d-M-Y').'_test.log');

    }

    public function testLogAlert()
    {        
        $this->service->generate('alert','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists(__DIR__.'/../../../logs/'.date('d-M-Y').'_test.log');

    }

    public function testLogEmergency()
    {        
        $this->service->generate('emergency','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists(__DIR__.'/../../../logs/'.date('d-M-Y').'_test.log');

    }
    public function testLogDefault()
    {        
        $this->service->generate('','log de prueba',["ola"=>"chao"],__METHOD__);

        $this->assertFileExists(__DIR__.'/../../../logs/'.date('d-M-Y').'_test.log');

    }
}
