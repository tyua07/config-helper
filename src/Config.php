<?php

// +----------------------------------------------------------------------
// | date: 2016-11-22
// +----------------------------------------------------------------------
// | Config.php: 配置信息
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace Yangyifan\Config;

class Config implements \ArrayAccess
{
    use ArrayAccessTrait;

    /**
     * 配置信息.
     *
     * @var array
     */
    protected $config;

    /**
     * Config constructor.
     *
     * @description 方法说明
     *
     * @author @author yangyifan <yangyifanphp@gmail.com>
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * 获取配置.
     *
     * @author @author yangyifan <yangyifanphp@gmail.com>
     *
     * @return mixed
     */
    public function get($name = null)
    {
        if (!is_null($name) && array_key_exists($name, $this->config)) {
            return $this->config[$name];
        }
    }

    /**
     * 设置配置信息.
     *
     * @param string $name
     * @param string $value
     *
     * @author @author yangyifan <yangyifanphp@gmail.com>
     *
     * @return Config
     */
    public function set($name, $value)
    {
        $this->config[$name] = $value;

        return $this;
    }

    /**
     * 移除某个单元.
     *
     * @param $name
     */
    public function remove($name)
    {
        unset($this->config[$name]);
    }

    /**
     * 判断 key 是否存在.
     *
     * @param $name
     *
     * @return bool
     */
    public function has($name)
    {
        return array_key_exists($name, $this->config);
    }

    /**
     * @param string $name
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        return $this->set($name, $value);
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        return $this->has($name);
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->remove($name);
    }
}
