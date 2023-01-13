<?php

namespace ContainerN3Ipzlp;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbf6f5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer92185 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties988c6 = [
        
    ];

    public function commit() : bool
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'commit', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'deleteItems', array('keys' => $keys), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'invalidateTags', array('tags' => $tags), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'hasItem', array('key' => $key), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'clear', array('prefix' => $prefix), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'deleteItem', array('key' => $key), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'getItem', array('key' => $key), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'getItems', array('keys' => $keys), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'save', array('item' => $item), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'saveDeferred', array('item' => $item), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'enableVersioning', array('enable' => $enable), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'reset', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'setLogger', array('logger' => $logger), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'delete', array('key' => $key), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->delete($key);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($instance);

        $instance->initializer92185 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolderbf6f5) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolderbf6f5 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolderbf6f5->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__get', ['name' => $name], $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        if (isset(self::$publicProperties988c6[$name])) {
            return $this->valueHolderbf6f5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf6f5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf6f5;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__isset', array('name' => $name), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbf6f5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__unset', array('name' => $name), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbf6f5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__clone', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $this->valueHolderbf6f5 = clone $this->valueHolderbf6f5;
    }

    public function __sleep()
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__sleep', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return array('valueHolderbf6f5');
    }

    public function __wakeup()
    {
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer92185 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer92185;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'initializeProxy', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf6f5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbf6f5;
    }

    public function __destruct()
    {
        $this->initializer92185 || $this->valueHolderbf6f5->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
