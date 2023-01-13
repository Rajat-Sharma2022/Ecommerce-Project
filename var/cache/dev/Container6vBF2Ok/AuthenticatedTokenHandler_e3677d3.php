<?php

namespace Container6vBF2Ok;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticatedTokenHandler.php';

class AuthenticatedTokenHandler_e3677d3 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler|null wrapped object, if the proxy is initialized
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

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->beginTwoFactorAuthentication($context);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($instance);

        $instance->initializer45cba = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, array $supportedTokens)
    {
        static $reflection;

        if (! $this->valueHolderd4c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');
            $this->valueHolderd4c4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);

        }

        $this->valueHolderd4c4e->__construct($authenticationHandler, $supportedTokens);
    }

    public function & __get($name)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__get', ['name' => $name], $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        if (isset(self::$publicProperties19e4c[$name])) {
            return $this->valueHolderd4c4e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);
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
}

if (!\class_exists('AuthenticatedTokenHandler_e3677d3', false)) {
    \class_alias(__NAMESPACE__.'\\AuthenticatedTokenHandler_e3677d3', 'AuthenticatedTokenHandler_e3677d3', false);
}