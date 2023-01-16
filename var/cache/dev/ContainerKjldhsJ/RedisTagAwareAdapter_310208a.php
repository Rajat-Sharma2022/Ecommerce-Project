<?php

namespace ContainerKjldhsJ;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85591 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer09bfc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties37535 = [
        
    ];

    public function commit() : bool
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'commit', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'deleteItems', array('keys' => $keys), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'invalidateTags', array('tags' => $tags), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'hasItem', array('key' => $key), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'clear', array('prefix' => $prefix), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'deleteItem', array('key' => $key), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getItem', array('key' => $key), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getItems', array('keys' => $keys), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'save', array('item' => $item), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'saveDeferred', array('item' => $item), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'enableVersioning', array('enable' => $enable), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'reset', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'setLogger', array('logger' => $logger), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'delete', array('key' => $key), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->delete($key);
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

        $instance->initializer09bfc = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder85591) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder85591 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder85591->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__get', ['name' => $name], $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        if (isset(self::$publicProperties37535[$name])) {
            return $this->valueHolder85591->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

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

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__isset', array('name' => $name), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__unset', array('name' => $name), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__clone', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $this->valueHolder85591 = clone $this->valueHolder85591;
    }

    public function __sleep()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__sleep', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return array('valueHolder85591');
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
        $this->initializer09bfc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09bfc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'initializeProxy', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85591;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85591;
    }

    public function __destruct()
    {
        $this->initializer09bfc || $this->valueHolder85591->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
