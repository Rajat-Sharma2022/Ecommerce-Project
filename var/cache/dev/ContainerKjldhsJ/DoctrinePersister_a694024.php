<?php

namespace ContainerKjldhsJ;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister|null wrapped object, if the proxy is initialized
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

    public function persist($user) : void
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'persist', array('user' => $user), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $this->valueHolder85591->persist($user);
return;
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $instance, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($instance);

        $instance->initializer09bfc = $initializer;

        return $instance;
    }

    public function __construct($om)
    {
        static $reflection;

        if (! $this->valueHolder85591) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHolder85591 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);

        }

        $this->valueHolder85591->__construct($om);
    }

    public function & __get($name)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__get', ['name' => $name], $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        if (isset(self::$publicProperties37535[$name])) {
            return $this->valueHolder85591->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
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
}

if (!\class_exists('DoctrinePersister_a694024', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersister_a694024', 'DoctrinePersister_a694024', false);
}
