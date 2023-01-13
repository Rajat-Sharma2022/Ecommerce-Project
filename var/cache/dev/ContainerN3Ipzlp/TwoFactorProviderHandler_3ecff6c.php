<?php

namespace ContainerN3Ipzlp;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/TwoFactorProviderHandler.php';

class TwoFactorProviderHandler_3ecff6c extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler|null wrapped object, if the proxy is initialized
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

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->beginTwoFactorAuthentication($context);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry, $instance->twoFactorTokenFactory);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($instance);

        $instance->initializer92185 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry $providerRegistry, \Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenFactoryInterface $twoFactorTokenFactory)
    {
        static $reflection;

        if (! $this->valueHolderbf6f5) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');
            $this->valueHolderbf6f5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry, $instance->twoFactorTokenFactory);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($this);

        }

        $this->valueHolderbf6f5->__construct($providerRegistry, $twoFactorTokenFactory);
    }

    public function & __get($name)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__get', ['name' => $name], $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        if (isset(self::$publicProperties988c6[$name])) {
            return $this->valueHolderbf6f5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry, $instance->twoFactorTokenFactory);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($this);
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
}

if (!\class_exists('TwoFactorProviderHandler_3ecff6c', false)) {
    \class_alias(__NAMESPACE__.'\\TwoFactorProviderHandler_3ecff6c', 'TwoFactorProviderHandler_3ecff6c', false);
}
