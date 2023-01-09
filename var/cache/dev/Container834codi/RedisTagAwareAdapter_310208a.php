<?php

namespace Container834codi;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd4c4e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer45cba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties19e4c = [
        
    ];

    public function commit() : bool
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'commit', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'deleteItems', array('keys' => $keys), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'invalidateTags', array('tags' => $tags), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'hasItem', array('key' => $key), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'clear', array('prefix' => $prefix), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'deleteItem', array('key' => $key), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'getItem', array('key' => $key), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'getItems', array('keys' => $keys), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'save', array('item' => $item), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'saveDeferred', array('item' => $item), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'enableVersioning', array('enable' => $enable), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'reset', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'setLogger', array('logger' => $logger), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'delete', array('key' => $key), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->delete($key);
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

        $instance->initializer45cba = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolderd4c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolderd4c4e = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolderd4c4e->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__get', ['name' => $name], $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        if (isset(self::$publicProperties19e4c[$name])) {
            return $this->valueHolderd4c4e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

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

        $targetObject = $this->valueHolderd4c4e;
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
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd4c4e;
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
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__isset', array('name' => $name), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd4c4e;
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
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__unset', array('name' => $name), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd4c4e;
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
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__clone', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $this->valueHolderd4c4e = clone $this->valueHolderd4c4e;
    }

    public function __sleep()
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__sleep', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return array('valueHolderd4c4e');
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
        $this->initializer45cba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer45cba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'initializeProxy', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd4c4e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd4c4e;
    }

    public function __destruct()
    {
        $this->initializer45cba || $this->valueHolderd4c4e->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
