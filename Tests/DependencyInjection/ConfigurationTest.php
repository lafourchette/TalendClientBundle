<?php
namespace LaFourchette\TalendClientBundle\Tests\DependencyInjection;

use LaFourchette\TalendClientBundle\Tests\ProphecyTestCase;
use LaFourchette\TalendClientBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;

/**
 * Class ConfigurationTest
 *
 * @package LaFourchette\TalendClientBundle\Tests\DependencyInjection
 */
class ConfigurationTest extends ProphecyTestCase
{
    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * @var Processor
     */
    private $processor;

    /**
     * method : setUp
     */
    public function setUp()
    {
        parent::setUp();

        $this->configuration = $this->prophesize('\LaFourchette\TalendClientBundle\DependencyInjection\Configuration');
        $this->processor = $this->prophesize('\Symfony\Component\Config\Definition\Processor');
    }

    /**
     * method : configuration
     */
    public function testConfiguration()
    {
        $configs = array(
            array(
                'base_url'    => 'https://talend.lafourchette.com',
                'login'       => 'MyLogin',
                'password'    => 'MyPassword',
                'logs_format' => '>>>>>>{request}<<<<<<{response}',
            ),
            array(
                'password'    => 'OtherPassword',
            )
        );
        $configuration = new Configuration;
        $processor = new Processor;
        $config = $processor->processConfiguration($configuration, $configs);
        $this->assertEquals(
            array(
                'base_url'    => 'https://talend.lafourchette.com',
                'login'       => 'MyLogin',
                'password'    => 'OtherPassword',
                'logs_format' => '>>>>>>{request}<<<<<<{response}',
            ),
            $config
        );
    }
}
