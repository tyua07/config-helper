### 配置帮助类
    一个简单的配置信息帮助类，方便自己管理一个对象的配置信息。


#### 安装

    composer require yangyifan/config-helper:v0.1
    
#### 使用

###### 初始化
    
    use Yangyifan\Config\Config;
    
    $config = new Config([
               'a' => 'a',
               'b' => 'b',
               'c' => 'c',
           ]);
    
###### 对象方式使用
    
        // 判断是否存在
        $config->has('a');
        
        // 获取
        $config->get('a');
        
        // 设置
        $config->set('a', 'a');
        
        // 移除
        $config->remove('a');
        
###### 数组方式使用
        
        // 判断是否存在
        isset($config['a']);
        
        // 获取
        $config['a']
        
        // 设置
        $config['a'] = 'a';
        
        // 移除
        unset($config['a']);
        
        
###### 协议

MIT
        
    
    
    
    
    