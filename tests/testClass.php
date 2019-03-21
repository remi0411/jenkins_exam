<?php


use PHPUnit\Framework\TestCase;

include(__DIR__.'/../config.php');
include(__DIR__.'/../functions.php');

class SimpleTest extends TestCase
{
	public function testReadConfigName()
	{

        siteName();
        $this->expectOutputString('Simple PHP Website');
	}
    
    
    public function testReadConfigVersion()
    {
        siteVersion();
        $this->expectOutputString('v2.0');
    }
}

?>