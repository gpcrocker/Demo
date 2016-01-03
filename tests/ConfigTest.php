<?php
/**
 * @coversDefaultClass \Gpcrocker88\Util\ConfLoader
 */
class ConfLoaderTest extends \PHPUnit_Framework_TestCase
{
    protected $config;

    public function setUp()
    {
        $this->config = new \Gpcrocker88\Util\ConfLoader();
    }

    /**
     *@covers ::getDBInfo
     */
    public function testGetDbInfo()
    {
        $dbInfo = $this->config->getDBInfo();
        $this->assertArrayHasKey('driver', $dbInfo);
        $this->assertArrayHasKey('dbname', $dbInfo);
        $this->assertArrayHasKey('host', $dbInfo);
        $this->assertArrayHasKey('user', $dbInfo);
        $this->assertArrayHasKey('pass', $dbInfo);
        $this->assertArrayHasKey('port', $dbInfo);
        $this->assertArrayHasKey('collation', $dbInfo);
    }

    public function testConfFileExists()
    {
        $this->assertFileExists(\Gpcrocker88\Util\ConfLoader::CONF_FNAME);
    }
}
?>
