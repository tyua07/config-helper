<?php

// +----------------------------------------------------------------------
// | date: 2016-11-13
// +----------------------------------------------------------------------
// | LogLibraryTest.php: 测试日志
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;
use Yangyifan\Library\UtilityLibrary;

class ConfigTest extends TestCase
{
    /**
     * 配置信息
     *
     * @var array
     */
    protected static $config;

    public static function setUpBeforeClass()
    {
        static::$config = new Yangyifan\Config\Config([
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
        ]);
    }

    public static function tearDownAfterClass()
    {
        self::$config = NULL;
    }

    // 测试 全部方法
    public function testAll()
    {
        $this->assertTrue(self::$config->has('a'));
        $this->assertFalse(self::$config->has('a1'));

        $this->assertEquals('a', self::$config->get('a'));
        $this->assertNotEquals('a1', self::$config->get('a'));

        self::$config->set('d', 'd');
        $this->assertTrue(self::$config->has('d'));
        $this->assertEquals('d', self::$config->get('d'));

        self::$config->remove('d');
        $this->assertFalse(self::$config->has('d'));
    }

    // 测试 数组全部方法
    public function testArray()
    {
        $this->assertTrue(isset(self::$config['a']));
        $this->assertFalse(isset(self::$config['a1']));

        $this->assertEquals('a', self::$config['a']);
        $this->assertNotEquals('a1', self::$config['a']);

        self::$config['d'] = 'd';
        $this->assertTrue(isset(self::$config['d']));
        $this->assertEquals('d', self::$config['d']);

        unset(self::$config['d']);
        $this->assertFalse(isset(self::$config['d']));
    }
}